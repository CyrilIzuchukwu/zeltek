<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //



    public function add_testimonial()
    {
        return view('testimonial.index');
    }


    public function create_testimonial(Request $request)
    {
        try {
            $request->validate([
                'service_type' => 'required',
                'testimonial' => 'required',
                'client_name' => 'required',
                'client_logo' => 'required|image|max:5000',
            ]);

            // Save the main property image
            if ($request->hasFile('client_logo')) {
                $clientImage = $request->file('client_logo');
                $clientImageName = time() . '.' . $clientImage->getClientOriginalExtension();
                $clientImage->move(public_path('client_logos'), $clientImageName);
            }

            $service_type = $request->service_type;
            $testimonial = $request->testimonial;
            $client_name = $request->client_name;

            $testimonial = Testimonial::updateOrCreate(
                [
                    'service_type' => $service_type,
                    'testimonial' => $testimonial,
                    'client_name' => $client_name,
                    'client_logo' => $clientImageName, // Save the image name instead of the object
                ]
            );

            $testimonial->save();

            return redirect()->route('testimonials')->with('success', 'Testimonial created successfully.');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }


    public function testimonials()
    {
        $testimonials = Testimonial::orderBy('created_at', 'desc')->Paginate(5);

        return view('testimonial.testimonials', compact('testimonials'));
    }

    public function delete_testimonial($id)
    {
        $data = Testimonial::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Testimonial deleted successfully');
    }


    public function edit_testimonial($id)
    {
        $data = Testimonial::find($id);
        return view('testimonial.edit', compact('data'));
    }

    public function update_testimonial(Request $request, $id)
    {
        try {
            $request->validate([
                'service_type' => 'required',
                'testimonial' => 'required',
                'client_name' => 'required',
                'client_logo' => 'nullable|image|max:5000',
            ]);

            // Find the testimonial by ID
            $testimonial = Testimonial::find($id);

            if (!$testimonial) {
                return redirect()->back()->with('error', 'Testimonial not found.');
            }

            // Save the new client logo image if it is provided
            if ($request->hasFile('client_logo')) {
                // Delete the old client logo if it exists
                if (file_exists(public_path('client_logos/' . $testimonial->client_logo))) {
                    unlink(public_path('client_logos/' . $testimonial->client_logo));
                }

                $clientImage = $request->file('client_logo');
                $clientImageName = time() . '.' . $clientImage->getClientOriginalExtension();
                $clientImage->move(public_path('client_logos'), $clientImageName);
                $testimonial->client_logo = $clientImageName;
            }

            $testimonial->service_type = $request->service_type;
            $testimonial->testimonial = $request->testimonial;
            $testimonial->client_name = $request->client_name;

            $testimonial->save();

            return redirect()->route('testimonials')->with('success', 'Testimonial updated successfully.');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

}

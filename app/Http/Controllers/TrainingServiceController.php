<?php

namespace App\Http\Controllers;

use App\Models\TrainingService;
use Illuminate\Http\Request;

class TrainingServiceController extends Controller
{
    //

    public function add_training_service()
    {
        return view('training_service.index');
    }


    public function create_service(Request $request)
    {
        try {
            $request->validate([
                'service_name' => 'required',
                'content' => 'required',
                'image' => 'required|image|max:5000',
            ]);

            // Save the main property image
            if ($request->hasFile('image')) {
                $serviceImage = $request->file('image');
                $servicImageName = time() . '.' . $serviceImage->getClientOriginalExtension();
                $serviceImage->move(public_path('service_images'), $servicImageName);
            }

            $service_name = $request->service_name;
            $content = $request->content;

            $trainigService = TrainingService::updateOrCreate(
                [
                    'service_name' => $service_name,
                    'content' => $content,
                    'image' => $servicImageName, // Save the image name instead of the object
                ]
            );

            $trainigService->save();

            return redirect()->route('training_service')->with('success', 'Servuce created successfully.');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }


    public function training_service()
    {
        $training_services = TrainingService::orderBy('created_at', 'desc')->Paginate(5);

        return view('training_service.training_service', compact('training_services'));
    }

    public function delete_service($id)
    {
        $data = TrainingService::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Service deleted');
    }


    public function edit_service($id)
    {
        $data = TrainingService::find($id);
        return view('training_service.edit', compact('data'));
    }

    public function update_service(Request $request, $id)
    {
        try {
            $request->validate([
                'service_name' => 'required',
                'content' => 'required',
                'image' => 'nullable|image|max:5000',
            ]);

            // Find the testimonial by ID
            $training_service = TrainingService::find($id);

            if (!$training_service) {
                return redirect()->back()->with('error', 'Service not found.');
            }

            // Save the new client logo image if it is provided
            if ($request->hasFile('image')) {
                // Delete the old client logo if it exists
                if (file_exists(public_path('service_images/' . $training_service->image))) {
                    unlink(public_path('service_images/' . $training_service->image));
                }

                $serviceImage = $request->file('image');
                $serviceImageName = time() . '.' . $serviceImage->getClientOriginalExtension();
                $serviceImage->move(public_path('service_images'), $serviceImageName);
                $training_service->image = $serviceImageName;
            }

            $training_service->service_name = $request->service_name;
            $training_service->content = $request->content;

            $training_service->save();

            return redirect()->route('training_service')->with('success', 'Service updated successfully.');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}

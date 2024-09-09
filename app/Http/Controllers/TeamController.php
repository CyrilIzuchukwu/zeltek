<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //

    public function add_team()
    {
        return view('teams.index');
    }


    public function create_team(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'bio' => 'required',
                'image' => 'required|image|max:5000',
            ]);

            // Save the main property image
            if ($request->hasFile('image')) {
                $teamImage = $request->file('image');
                $teamImageName = time() . '.' . $teamImage->getClientOriginalExtension();
                $teamImage->move(public_path('team_images'), $teamImageName);
            }

            $name = $request->name;
            $bio = $request->bio;

            $team = Team::updateOrCreate(
                [
                    'name' => $name,
                    'bio' => $bio,
                    'image' => $teamImageName,
                ]
            );

            $team->save();

            return redirect()->route('teams')->with('success', 'Team Member created .');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }


    public function teams()
    {
        $teams = Team::orderBy('created_at', 'desc')->Paginate(5);

        return view('teams.teams', compact('teams'));
    }

    public function delete_team($id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Team Member deleted');
    }


    public function edit_team($id)
    {
        $data = Team::find($id);
        return view('teams.edit', compact('data'));
    }

    public function update_team(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'bio' => 'required',
                'image' => 'nullable|image|max:5000',
            ]);

            // Find the testimonial by ID
            $team = Team::find($id);

            if (!$team) {
                return redirect()->back()->with('error', 'Team Member not found.');
            }

            // Save the new client logo image if it is provided
            if ($request->hasFile('image')) {
                // Delete the old client logo if it exists
                if (file_exists(public_path('team_images/' . $team->image))) {
                    unlink(public_path('team_images/' . $team->image));
                }

                $teamImage = $request->file('image');
                $teamImageName = time() . '.' . $teamImage->getClientOriginalExtension();
                $teamImage->move(public_path('team_images'), $teamImageName);
                $team->image = $teamImageName;
            }

            $team->name = $request->name;
            $team->bio = $request->bio;

            $team->save();

            return redirect()->route('teams')->with('success', 'Team Member updated.');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}

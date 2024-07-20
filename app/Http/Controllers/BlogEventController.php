<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogEventController extends Controller
{
    //

    public function add_blog()
    {
        return view('blog_event.add_blog');
    }


    public function create_blog(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'author' => 'required',
                'content' => 'required',
                'blog_image' => 'required|image|max:5000',
            ]);

            // Save the main property image
            if ($request->hasFile('blog_image')) {
                $blogImage = $request->file('blog_image');
                $blogImageName = time() . '.' . $blogImage->getClientOriginalExtension();
                $blogImage->move(public_path('blog_images'), $blogImageName);
            }

            $title = $request->title;
            $author = $request->author;
            $content = $request->content;

            $blog = Blog::updateOrCreate(
                [
                    'title' => $title,
                    'author' => $author,
                    'content' => $content,
                    'image' => $blogImageName,
                ]
            );

            $blog->save();
            return redirect()->route('blogs')->with('success', 'Blog created.');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->Paginate(10);

        return view('blog_event.blogs', compact('blogs'));
    }

    public function delete_blog($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }


    public function edit_blog($id)
    {
        $data = Blog::find($id);
        return view('blog_event.edit', compact('data'));
    }


    public function update_blog(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'author' => 'required',
                'content' => 'required',
                'blog_image' => 'nullable|image|max:5000',
            ]);

            // Find the blog by ID
            $blog = Blog::find($id);

            if (!$blog) {
                return redirect()->back()->with('error', 'Blog not found.');
            }

            // Save the new blog image if it is provided
            if ($request->hasFile('blog_image')) {
                // Delete the old blog image if it exists
                if (file_exists(public_path('blog_images/' . $blog->image))) {
                    unlink(public_path('blog_images/' . $blog->image));
                }

                $blogImage = $request->file('blog_image');
                $blogImageName = time() . '.' . $blogImage->getClientOriginalExtension();
                $blogImage->move(public_path('blog_images'), $blogImageName);
                $blog->image = $blogImageName;
            }

            // dd($blog);

            $blog->title = $request->title;
            $blog->author = $request->author;
            $blog->content = $request->content;

            $blog->save();

            return redirect()->route('blogs')->with('success', 'Blog updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

}

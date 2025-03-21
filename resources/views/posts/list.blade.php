<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts & Comments</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="min-h-screen">
    <header class="bg-gradient-to-r from-purple-600 to-indigo-600 shadow-lg">
      <div class="max-w-5xl mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-white">Beautiful Blog</h1>
        <p class="mt-2 text-indigo-100">Hello {{ Auth::user()->name }}, Share your thoughts with the world</p>
      </div>
    </header>

    <main class="max-w-5xl mx-auto px-4 py-8">
      <!-- <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8 p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Create New Post</h2>
        <form action="/add_post" method="POST">
          <div class="mb-4">
            <label for="post-title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input type="text" name="title" id="post-title" class="w-full px-4 py-2 border border-gray-300 rounded-md">
          </div>
          <div class="mb-4">
            <label for="post-description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" id="post-description" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md"></textarea>
          </div>
          <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Publish Post</button>
        </form>
      </div> -->
      @foreach($posts as $post)
      <div class="space-y-8 mb-6">
        <div class="post-card bg-white rounded-xl shadow-md overflow-hidden p-6">
          <div class="flex justify-between items-start">
            <div>
              <h3 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h3>
              <p class="text-gray-500 text-sm mt-1">Posted on {{ $post->created_at }}</p>
              <p class="text-gray-500 text-sm mt-1">Writer : {{ $post->user->name}}</p>
            </div>

            <form action="/posts/{{$post->id}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-gray-400 hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                  <polyline points="3 6 5 6 21 6"></polyline>
                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                  <line x1="10" y1="11" x2="10" y2="17"></line>
                  <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
              </button>
            </form>

          </div>
          <p class="text-gray-600 mt-4">{{ $post->content }}</p>

          <div class="mt-6">
            <h4 class="text-md font-semibold text-gray-700 mb-3">Comments</h4>
            @foreach($post->comments as $comment)
            <div class="comment bg-gray-50 rounded-lg p-4 flex justify-between mb-4">
              <p class="text-gray-900">{{ $comment->content }}</p>
              <form action="/delete_comment" method="POST">
                <input type="hidden" name="comment_id" value="1">
                <button type="submit" class="text-gray-400 hover:text-red-500">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                  </svg>
                </button>
              </form>
            </div>
            @endforeach
            <!-- <form action="/add_comment" method="POST" class="mt-4 flex">
              <input type="text" name="comment" class="flex-grow px-4 py-2 border border-gray-300 rounded-l-md" placeholder="Add a comment...">
              <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-r-md">Post</button>
            </form> -->
          </div>
        </div>
      </div>
      @endforeach
      
    </main>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="mb-4 md:mb-0">
            <h2 class="text-xl font-bold">Beautiful Blog</h2>
            <p class="text-gray-400 mt-1">Share your thoughts with the world</p>
          </div>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
          &copy; 2025 Beautiful Blog. All rights reserved.
        </div>
      </div>
    </footer>
  </div>
</body>
</html>

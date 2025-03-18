<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts and Comments Page</title>
  <style>
    /* General Styles */
    body {
    font-family: 'Arial', sans-serif;
    background-color: #fafafa;
    margin: 0;
    padding: 0;
    color: #262626;
    }

    .container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #dbdbdb;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Post Section */
    .post {
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #dbdbdb;
    }

    .post:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
    }

    .post-header {
    margin-bottom: 10px;
    }

    .post-title {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
    }

    .post-content {
    font-size: 16px;
    line-height: 1.5;
    color: #333;
    margin-bottom: 20px;
    }

    /* Comments Section */
    .comments {
    margin-top: 15px;
    }

    .comments h3 {
    font-size: 18px;
    margin-bottom: 10px;
    }

    .comment {
    margin-bottom: 15px;
    padding: 10px;
    background-color: #f0f0f0;
    border-radius: 8px;
    position: relative;
    }

    .comment-content {
    font-size: 14px;
    margin: 0 0 10px 0;
    }

    .remove-form .remove-btn {
    background-color: #ff4b5c;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 12px;
    }

    .remove-form .remove-btn:hover {
    background-color: #ff1c34;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Post 1 -->
    <div class="post">
      <div class="post-header">
        <h2 class="post-title">Post Title 1</h2>
      </div>
      <div class="post-content">
        <p>This is the content of the first post. It can be as long or as short as needed.</p>
      </div>

      <!-- Comments for Post 1 -->
      <div class="comments">
        <h3>Comments</h3>
        <div class="comment">
          <p class="comment-content">This is a comment on the first post.</p>
          <form action="/remove-comment" method="POST" class="remove-form">
            <input type="hidden" name="comment-id" value="1">
            <button type="submit" class="remove-btn">Remove Comment</button>
          </form>
        </div>
        <div class="comment">
          <p class="comment-content">Another comment on the first post.</p>
          <form action="/remove-comment" method="POST" class="remove-form">
            <input type="hidden" name="comment-id" value="2">
            <button type="submit" class="remove-btn">Remove Comment</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Post 2 -->
    <div class="post">
      <div class="post-header">
        <h2 class="post-title">Post Title 2</h2>
      </div>
      <div class="post-content">
        <p>This is the content of the second post. It can be as long or as short as needed.</p>
      </div>

      <!-- Comments for Post 2 -->
      <div class="comments">
        <h3>Comments</h3>
        <div class="comment">
          <p class="comment-content">This is a comment on the second post.</p>
          <form action="/remove-comment" method="POST" class="remove-form">
            <input type="hidden" name="comment-id" value="3">
            <button type="submit" class="remove-btn">Remove Comment</button>
          </form>
        </div>
        <div class="comment">
          <p class="comment-content">Another comment on the second post.</p>
          <form action="/remove-comment" method="POST" class="remove-form">
            <input type="hidden" name="comment-id" value="4">
            <button type="submit" class="remove-btn">Remove Comment</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Post 2 -->
    <div class="post">
        <div class="post-header">
          <h2 class="post-title">Post Title 2</h2>
        </div>
        <div class="post-content">
          <p>This is the content of the second post. It can be as long or as short as needed.</p>
        </div>
  
        <!-- Comments for Post 2 -->
        <div class="comments">
          <h3>Comments</h3>
          <div class="comment">
            <p class="comment-content">This is a comment on the second post.</p>
            <form action="/remove-comment" method="POST" class="remove-form">
              <input type="hidden" name="comment-id" value="3">
              <button type="submit" class="remove-btn">Remove Comment</button>
            </form>
          </div>
          <div class="comment">
            <p class="comment-content">Another comment on the second post.</p>
            <form action="/remove-comment" method="POST" class="remove-form">
              <input type="hidden" name="comment-id" value="4">
              <button type="submit" class="remove-btn">Remove Comment</button>
            </form>
          </div>
        </div>
      </div>
  </div>
</body>
</html>
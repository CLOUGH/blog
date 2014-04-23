<?php
class CommentTest extends TestCase
{
	public function testStoreCommentDoesStoreComment(){
		$data = array(
			'user-name'=>'test',
			'blog-comment'=>'test',
			'blog-id'=>'1'
		);
		$blog_comment = Comment::storeBlogComment($data);

		$this->assertEquals("test", $blog_comment->comment, 'The comment did not equal to the expected value.');
	}
	public function testCommentRelationshipExistToBlog()
	{
		$blog_data = array(
			'blog-title'=>'test',
			'blog-image'=>'test',
			'blog-description'=>'test',
			'blog-body'=>'text'
		);
		$blog = Blog::createBlog($blog_data);
		$comment_data = array(
			'user-name'=>'test',
			'blog-comment'=>'test',
			'blog-id'=>"$blog->id"
		);
		print_r($comment_data);
		$blog_comment = Comment::storeBlogComment($comment_data);
		 $new_blog = $blog_comment->blog;
		var_dump($new_blog->title);

		//$this->assertEquals($blog, $blog_comment->blog(), 'The relation ship mapped did not match expected value.');
	}
}
?> 
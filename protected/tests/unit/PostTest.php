<?php

class PostTest extends CDbTestCase 
{
    public $fixtures = array(
       	'posts' => 'Post',
		'users' => 'User'
    );

    public function testCreate()
    {
        $newPost = new Post();
        $newPostTitle = 'Test Post Creation';
        $newPost->setAttributes(array(
            'title' => $newPostTitle,
            'content' => 'This is a test for new post creation.',
            'type' => 0,
        ));
        Yii::app()->user->setId($this->users('user1')->id);
        $this->assertTrue($newPost->save());
        $newPost->save();

        $retrievedPost = Post::model()->findByPk($newPost->id);
        $this->assertTrue($retrievedPost instanceof Post);
        $this->assertEquals($newPostTitle, $retrievedPost->title);
        $this->assertEquals(Yii::app()->user->id, $retrievedPost->create_user_id);
    }

    public function testRead()
    {
        $retrievedPost = $this->posts('post1');
        $this->assertTrue($retrievedPost instanceof Post);
        $this->assertEquals('Test Post 1', $retrievedPost->title);
    }

    public function testUpdate()
    {
        $post = $this->posts('post2');
        $updatePostTitle = 'Updated Test Post 2';
        $post->title = $updatePostTitle;
        $this->assertTrue($post->save(false));
        $updatedPost = Post::model()->findByPk($post->id);
        $this->assertTrue($updatedPost instanceof Post);
        $this->assertEquals($updatePostTitle, $updatedPost->title);
    }

    public function testDelete()
    {
        $post = $this->posts('post2');
        $savedPostId = $post->id;
        $this->assertTrue($post->delete());
        $deletedPost = Post::model()->findByPk($savedPostId);
        $this->assertEquals(NULL, $deletedPost);
    }
    
}
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
        ));
        Yii::app()->user->setId($this->users('user1')->id);
        $this->assertTrue($newPost->save());

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

    /*public function testCRUD()
    {
        $newPost = new Post();
        $newPostTitle = 'Test Post 1';
        $newPost->setAttributes(array(
            'title' => $newPostTitle,
            'content' => 'something...',
            'create_time' => date('Y-m-d H:i:s'),
            'create_user_id' => 1,
            'update_time' => date('Y-m-d H:i:s'),
            'update_user_id' => 1,
        ));
        $this->assertTrue($newPost->save(false));
        
        $retrievedPost = Post::model()->findByPk($newPost->id);
        $this->assertTrue($retrievedPost instanceof Post);
        $this->assertEquals($newPostTitle, $retrievedPost->title);
        
        $updatedPostTitle = 'Updated Test post 1';
        $newPost->title = $updatedPostTitle;
        $this->assertTrue($newPost->save(false));
        
        $updatedPost = Post::model()->findByPk($newPost->id);
        $this->assertTrue($updatedPost instanceof Post );
        $this->assertEquals($updatedPostTitle, $updatedPost->title);
        
        $newPostId = $newPost->id;
        $this->assertTrue($newPost->delete());
        $deletedPost = Post::model()->findByPk($newPostId);
        $this->assertEquals(null, $deletedPost);
    }*/
}
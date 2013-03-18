<?php
class ProjectTest extends CDbTestCase
{
  public function testCRUD()
  {
	 //Create a new project
  $newProject=new Product;
  $newProjectName = 'Test Project 1';
  $newProject->setAttributes(
		array(
			'uid'=>12,
		)
	);
    $this->assertTrue($newProject->save(false));
  }
}
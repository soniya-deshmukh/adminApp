<?php
/* *
* Provide Admin key information
* @author Soniya
*/
	class Admin{
		private $db;
		public function __construct(){
			$this->db = new Database; //Database.php included
		}
		/**
		 * Get Admin login
		 * @param mixed $email The email to be returned.
		 * @param mixed $pass The pass to be returned.
		 */
		// Get Admin login
		public function getAdmin($email, $pass){
			$this->db->query("SELECT *
						FROM users 
						WHERE email = :email
						AND password = :password
						AND is_admin = 1
						");
			$this->db->bind(':email', $email);
			$this->db->bind(':password', $pass);
			$row = $this->db->single();
			return $row;
		}
		// check if user email already exist
		public function checkUser($email){
			$this->db->query("SELECT email
						FROM users 
						WHERE email = :email
						");
			$this->db->bind(':email', $email);
			$row = $this->db->single();
			return $row;
		}// check if updated user email already exist
		public function checkUpdatedUser($user_id){
			$this->db->query("SELECT email
						FROM users 
						WHERE
						id != :id
						");
			$this->db->bind(':id', $user_id);
			$results = $this->db->resultSet();
			return $results;
		}
		//Add page
		/* *
		* add the page
		*/
		public function addPage($data){
			$this->db->query("INSERT INTO pages (page_title, page_body, is_published, meta_tag, meta_description, admin_id)
			VALUES (:page_title,:page_body, :is_published, :meta_tag, :meta_description, :admin_id)");
			// Bind Data
			$this->db->bind(':page_title', $data['page_title']);
			$this->db->bind(':page_body', $data['page_body']);
			$this->db->bind(':is_published', $data['is_published']);
			$this->db->bind(':meta_tag', $data['meta_tag']);
			$this->db->bind(':meta_description', $data['meta_description']);
			$this->db->bind(':admin_id', $data['admin_id']);
			//Execute
			if($this->db->execute())
			{
				return true;
			} else {
				return false;
			}
		}
		//Add User
		public function addUser($data){
			$this->db->query("INSERT INTO users (name, email, password, notes, is_admin, created_by)
			VALUES (:name,:email, :password, :notes, :is_admin, :created_by)");
			// Bind Data
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':notes', $data['notes']);
			$this->db->bind(':is_admin', $data['is_admin']);
			$this->db->bind(':created_by', $data['created_by']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		
		//Add page
		public function addPost($data){
			$this->db->query("INSERT INTO posts (post_title, post_body, is_published, created_by)
			VALUES (:post_title,:post_body, :is_published, :created_by)");
			// Bind Data
			$this->db->bind(':post_title', $data['post_title']);
			$this->db->bind(':post_body', $data['post_body']);
			$this->db->bind(':is_published', $data['is_published']);
			$this->db->bind(':created_by', $data['created_by']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		//Get pages
		public function getPages(){
			$this->db->query("SELECT * FROM pages ORDER BY id DESC");
			$results = $this->db->resultSet();
			return $results;
		}
		//Get users
		public function getUsers(){
			$this->db->query("SELECT * FROM users ORDER BY id DESC");
			$results = $this->db->resultSet();
			return $results;
		}
		//Get posts
		public function getPosts(){
			$this->db->query("SELECT * FROM posts ORDER BY id DESC");
			$results = $this->db->resultSet();
			return $results;
		}
		//Get particular page
		public function getPageById($id){
			$this->db->query("SELECT * FROM pages
							  WHERE id =$id");
			$row = $this->db->single();
			return $row;
		}
		//Get particular page
		public function getUserById($id){
			$this->db->query("SELECT * FROM users
							  WHERE id =$id");
			$row = $this->db->single();
			return $row;
		}
		//Get particular page
		public function getPostById($id){
			$this->db->query("SELECT * FROM posts
							  WHERE id =$id");
			$row = $this->db->single();
			return $row;
		}
		//Update page
		public function updatePage($data,$edit_id){
			$this->db->query("UPDATE pages 
			SET	
			page_title = :page_title, 
			page_body =:page_body, 
			is_published =:is_published, 
			meta_tag = :meta_tag, 
			meta_description = :meta_description, 
			updated_at = :updated_at, 
			admin_id = :admin_id 
			WHERE id = $edit_id");
			// Bind Data
			$this->db->bind(':page_title', $data['page_title']);
			$this->db->bind(':page_body', $data['page_body']);
			$this->db->bind(':is_published', $data['is_published']);
			$this->db->bind(':meta_tag', $data['meta_tag']);
			$this->db->bind(':meta_description', $data['meta_description']);
			$this->db->bind(':updated_at', $data['updated_at']);
			$this->db->bind(':admin_id', $data['admin_id']);
			//Execute
			if($this->db->execute()){
			return true;
			} else {
			return false;
			}
		}
		//Update Post
		public function updatePost($data,$edit_id){
			$this->db->query("UPDATE posts 
			SET	
			post_title = :post_title, 
			post_body =:post_body, 
			is_published =:is_published, 
			updated_at = :updated_at, 
			updated_by = :updated_by 
			WHERE id = $edit_id");
			// Bind Data
			$this->db->bind(':post_title', $data['post_title']);
			$this->db->bind(':post_body', $data['post_body']);
			$this->db->bind(':is_published', $data['is_published']);
			$this->db->bind(':updated_at', $data['updated_at']);
			$this->db->bind(':updated_by', $data['updated_by']);
			//Execute
			if($this->db->execute()){
			return true;
			} else {
			return false;
			}
		}
		//Update User
		public function updateUser($data,$edit_id){
			$this->db->query("UPDATE users 
			SET	
			name = :name, 
			email =:email, 
			password =:password, 
			notes = :notes
			WHERE id = $edit_id");
			// Bind Data
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':notes', $data['notes']);
			//Execute
			if($this->db->execute()){
			return true;
			} else {
			return false;
			}
		}
		//Delete page
		public function deletePage($del_id){
			$this->db->query("DELETE FROM pages WHERE id = :id");
			$this->db->bind('id', $del_id);
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		//Delete user
		public function deleteUser($del_id){
			$this->db->query("DELETE FROM users WHERE id = :id");
			$this->db->bind('id', $del_id);
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		//Delete post
		public function deletePost($del_id){
			$this->db->query("DELETE FROM posts WHERE id = :id");
			$this->db->bind('id', $del_id);
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		//Get no. of pages
		public function getPagesCount(){
			$this->db->query("SELECT COUNT(id) as total_pages FROM pages");
			$row = $this->db->single();
			return $row;
		}
		//Get no. of posts
		public function getPostsCount(){
			$this->db->query("SELECT COUNT(id) as total_posts FROM posts");
			$row = $this->db->single();
			return $row;
		}
		//Get no. of users
		public function getUsersCount(){
			$this->db->query("SELECT COUNT(id) as total_users FROM users");
			$row = $this->db->single();
			return $row;
		}


/* 
		// Get All Jobs
		public function getAllJobs(){
			$this->db->query("SELECT jobs.*, categories.name AS cname 
						FROM jobs 
						INNER JOIN categories
						ON jobs.category_id = categories.id 
						ORDER BY post_date DESC 
						");
			$results = $this->db->resultSet();
			return $results;
		}
		public function getAllCategories()
		{
		    $this->db->query("select * from categories");
		    $results = $this->db->resultSet();
		    return $results;
		}
		// Get by category
		public function getByCategory($category){ 
		$this->db->query("SELECT jobs.*, categories.name AS cname 
						FROM jobs 
						INNER JOIN categories
						ON jobs.category_id = categories.id 
						WHERE jobs.category_id = $category
						ORDER BY post_date DESC 
						"); 
						// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}
		// Get category
		public function getCategory($category_id){
			$this->db->query("SELECT * FROM categories WHERE id = :category_id");
			$this->db->bind(':category_id', $category_id);
			// Assign Row
			$row = $this->db->single();
			return $row;
		}
		public function getJob($job_id){
			$this->db->query("SELECT * FROM jobs WHERE id = :id");
			$this->db->bind('id', $job_id);
			$row = $this->db->single();
			return $row;
		}
		// Create Job
		public function create($data){
			//Insert Query
			$this->db->query("INSERT INTO jobs (category_id, job_title, company, description, location, salary, 
			contact_user, contact_email)
			VALUES (:category_id,:job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");
			// Bind Data
			$this->db->bind(':category_id', $data['category']);
			$this->db->bind(':job_title', $data['job_title']);
			$this->db->bind(':company', $data['company']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':location', $data['location']);
			$this->db->bind(':salary', $data['salary']);
			$this->db->bind(':contact_user', $data['contact_user']);
			$this->db->bind(':contact_email', $data['contact_email']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	
		// Update Job
		public function update($id,$data){
			//Update Query
			$this->db->query("UPDATE jobs 
							  SET	
							  category_id =:category_id,
							  job_title = :job_title, 
							  company =:company, 
							  description =:description, 
							  location = :location, 
							  salary = :salary, 
							  contact_user = :contact_user, 
							  contact_email = :contact_email 
							  WHERE id = $id");
			// Bind Data
			$this->db->bind(':category_id', $data['category']);
			$this->db->bind(':job_title', $data['job_title']);
			$this->db->bind(':company', $data['company']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':location', $data['location']);
			$this->db->bind(':salary', $data['salary']);
			$this->db->bind(':contact_user', $data['contact_user']);
			$this->db->bind(':contact_email', $data['contact_email']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		//Delete job
		public function deleteJob($job_id){
			$this->db->query("DELETE FROM jobs WHERE id = :id");
			$this->db->bind('id', $job_id);
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
 */	}
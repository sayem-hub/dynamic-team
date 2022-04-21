<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dynamic Team Memeber by PHP</title>
</head>
<body>
        <?php 
               /* Question 02:
		Let’s make a website which only contains our teams section.
	    Now create an array of our teams at least three elements and make the our team section dynamic using php.
        *Make an array of our teams including image
        *Make a section of our team by using html css
        *And dynamic the section by php */

        $team_members = [
                 [
                    'name' => 'Mr. Jillur Rahman',
                    'designation' => 'Chairman',
                    'company' => 'SoroBindu',
                    'duration' => 'Since 2000',
                    'image' => 'jillur.jpg'
                 ],

                  [
                    'name' => 'Mr. Rafikul Islam',
                    'designation' => 'CEO',
                    'company' => 'SoroBindu',
                     'duration' => 'Since 2001',
                      'image' => 'rafikul.jpg'
                 ],
                  
                   [
                    'name' => 'Mr. XYZ',
                    'designation' => 'Instructor',
                    'company' => 'LFWF',
                     'duration' => 'Since 2002',
                      'image' => 'xyz.jpg'
                 ],            

                    [
                    'name' => 'Mr. ABC',
                    'designation' => 'Co-Instructor',
                    'company' => 'XYZ Group',
                     'duration' => 'Since 2003',
                      'image' => 'abc.jpg'
                 ],

                  [
                    'name' => 'Abu Sayem',
                    'designation' => 'Student',
                    'company' => 'NZ Group',
                     'duration' => 'Since 2004',
                      'image' => 'sayem.jpg'
                 ],

                  [
                    'name' => 'Student-2',
                    'designation' => 'Student',
                    'company' => 'XYZ Group',
                     'duration' => 'Since 2005',
                      'image' => 'student2.png'
                 ],

                   [
                    'name' => 'Student-3',
                    'designation' => 'Student',
                    'company' => 'XYZ Group',
                     'duration' => 'Since 2006',
                      'image' => 'student2.png'
                 ],

                [
                    'name' => 'Student-4',
                    'designation' => 'Student',
                    'company' => 'XYZ Group',
                     'duration' => 'Since 2007',
                      'image' => 'student2.png'
                 ],
        ];
  
        ?>

        <div class="container">
                <h3 class="text-center m-3">Our Team Members</h3>
                <div class="row row-cols-1 row-cols-md-4 g-4">

                <?php foreach ($team_members as $key => $member) {?>
                
                    <div class="col">
                        <div class="card bg-light bg-gradient">
                        <img src="images/<?php echo $member['image'];?>" class="card-img-top rounded-circle card-img-top mt-3 mx-auto"  height="250px"   alt="...">
                        <div class="card-body">
                        <h5 class="card-title fw-bolder "><?php echo $member['name'];?></h5>
                        <span class="card-text fw-bold fst-italic"><?php echo $member['designation'];?></span><br>
                        <span class="card-text"><?php echo "Company: " . $member['company'];?></span><br>
                        <span class="card-text"><?php echo "Member: " . $member['duration'];?></span>
                    </div>
                    </div>
                </div>

                    <?php  } ?>
                    </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
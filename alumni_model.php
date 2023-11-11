<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
    <title>Student's information</title>
    <style>
        a
        {
            position: left;
            margin-left: 5px;
        }
        h1
        {
            position: center;
            margin-left: 450px;
            font: bold;
        }
        .container
        {
            
            position: center;
            margin-left: 60px;
        }
        body
        {
            background-color: #9fb0c9;
        }
    </style>
</head>
<body>

<h1>STUDENT'S INFORMATIONS</h1>
<div class="container">
<table class= "table bordered">
        <thead >
            <tr  >
                <th >
                   Last Name
                </th>
                <th >
                   First Name 
                </th>
                <th >
                   Middle Name
                </th>
                <th>
                   Contacts
                </th>
                <th>
                    Email
                </th>
                <th >
                    Gender
                </th>
                <th >
                  Degree
                </th>
                <th >
                  Instructor
                </th>
                <th >
                 Section
                </th>
                <th >
                <a href="<?= site_url('students/add')?>"> <button>Create</button></a>
                </th>

            
            </tr>
        </thead>

        <tbody>
            <?php foreach($students as $student) : ?>
            <tr >
                <td>
                   <?= $student-> Lastname ?>
                </td>
                <td>
                <?= $student-> Firstname ?>
                </td>
                <td>
                <?= $student-> Middlename ?>
                </td>
              
                <td>
                <?= $student-> contacts ?>
                </td>
                <td>
                <?= $student-> email ?>
                </td>
                <td>
                <?= $student-> gender ?>
                </td>
                <td>
                <?= $student-> course_id ?>
                </td>
                <td>
                <?= $student-> instructor_id ?>
                </td>
                <td>
                <?= $student-> Section_id ?>
                </td>
                <td>
                <a href="<?= site_url('Students/show/' . $student->id)?>"><button>Edit</button></a> |<a href="<?= site_url('Students/delete/' . $student->id)?>"><button>Delete</button></a>
                </td>
                
            </tr>
            <?php endforeach ?>


       </tbody>
    </table>

    </div>

</body>
</html>

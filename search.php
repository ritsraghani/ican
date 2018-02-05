<?php include('../header.php'); ?>
<main>
<?php      

    $final_results = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST['search']) && !empty($_POST['search'])){

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "jun";

            try {
           
                $search_term =  $_POST['search'];
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT jc.id as class_id,jc.classname as class_name,jc.contact,jc.email,course_id,js.course_name,js.course_fees,branch_name,adress,branch_desc,jc_bd.id as branch_id
                                        FROM jun_classes as jc 
                                        JOIN jun_class_branch_details AS jc_bd ON jc.id=jc_bd.class_id 
                                        JOIN jun_courses AS js ON js.id=jc_bd.course_id 
                                        WHERE jc.status = 1 AND 
                                        jc.classname LIKE '%$search_term%' 
                                        OR branch_name LIKE  '%$search_term%'
                                        OR js.course_name LIKE  '%$search_term%'
                                        
                                    "); 
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                $final_results = $stmt->fetchAll();
                // echo "<pre>";
                // print_r($final_results);die();
                
                // foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                //     echo $v;
                // }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
?>

<table>
<thead>
    <tr>
        <th>Sr.No.</th>
        <th>Class Name</th>
        <th>Branch Name</th>
        <th>Course Name</th>
        <th>Course Fees</th>
        <th>Contact</th>
        <th>email</th>
        <th>Address</th>
        <!-- <th>Description</th> -->
    </tr>
</thead>
<tbody>
    <?php foreach($final_results as $key => $value){ ?>
        <tr>
            <td><?=($key+1);?></td>
            <td><?=$value['class_name'];?></td>
            <td><?=$value['branch_name'];?></td>
            <td><?=$value['course_name'];?></td>
            <td><?=$value['course_fees'];?></td>
            <td><?=$value['contact'];?></td>
            <td><?=$value['email'];?></td>
            <td><?=$value['adress'];?></td>
        </tr>
    <?php } ?>
</tbody>
</table>

<?php
        }else{
            echo "<p style='color:red;background:#e2e2e2;padding:10px;text-align:center;'>Please Enter Something to Search.....</p>";
        }    
    }
?>

</main>
<?php include('../footer.php'); ?>

<?php
include("Questions/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAG Worship Center</title>
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="bootsnip.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="icon" type="image/x-icon" href="imgs/logo.pn">


</head>
<body>
<center><img src="imgs/logo.png" alt=""></center>
    <hr>

    <center><h2>Worship Centre Downtown</h2></center>
    
<br>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <!-- question -->
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="questions-tab" data-bs-toggle="tab" data-bs-target="#questions" type="button" role="tab" aria-controls="questions" aria-selected="false">Question</button>
        </li>
        <!-- News -->
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab" aria-controls="news" aria-selected="false">News</button>
        </li>
            <!-- Alerts -->
            <li class="nav-item" role="presentation">
            <button class="nav-link" id="news-tab" data-bs-toggle="tab" data-bs-target="#alerts" type="button" role="tab" aria-controls="alerts" aria-selected="false">Alerts</button>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            
        </div>

        <!-- question tab -->
        <div class="tab-pane fade" id="questions" role="tabpanel" aria-labelledby="questions-tab">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <h1 style="padding: 2em;">Questions</h1>
                <?php echo $deleteMsg??''; ?>
                <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Question</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                    <?php
                        if(is_array($fetchData)){      
                        $sn=1;
                        foreach($fetchData as $data){
                        ?>
                        <tr>
                        
                        <td><?php echo $data['id']??''; ?></td>
                            <td><?php echo $data['name']??''; ?></td>
                        <td><?php echo $data['question']??''; ?></td>
                            <td><?php echo date('d M Y h:i A',strtotime($data['created_date'])) ??''; ?></td>
                        </tr>
                        <?php
                        $sn++;}}else{ ?>
                        <tr>
                            <td colspan="8">
                        <?php echo $fetchData; ?>
                    </td>
                        <tr>
                        <?php
                        }?>
                        </tbody>
                        </table>
            </div>
            </div>
            </div>
            </div>

        </div>
        <!-- News Sectiion -->
        <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
            <div class="container-fluid" style="padding:40px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header">
                                <h2>New Updates</h2>
                            </div>
                            <p>Please fill this form and submit to add news</p>
                            <form action="insert.php" method="post">
                                <div class="form-group">
                                    <label>title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>description</label>
                                    <input type="text" name="description" class="form-control" maxlength="4">
                                </div>
                                <div class="form-group">
                                    <label>verse</label>
                                    <input type="text" name="verse" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="number" name="status" class="form-control">
                                </div>
                                <br>
                                <!-- <div class="form-group">
                                    <label>Post Status(Default is "1")</label>
                                    <input type="number" name="status" value="1" class="form-control">
                                </div> -->
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>        
                </div>

        </div>
        <!-- News Sectiion -->
        <div class="tab-pane fade" id="alerts" role="tabpanel" aria-labelledby="alerts-tab">
        <div class="container-fluid" style="padding:40px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header">
                                <h2>New App Alerts</h2>
                            </div>
                            <p>Add new alerts</p>
                            <form action="insert.php" method="post">
                                <div class="form-group">
                                    <label>title</label>
                                    <input type="text" name="alerts_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea style="padding:10px;" name="alerts_description" id=""  cols="60" rows="5">
                                    </textarea>
                                    <!-- <input type="text" name="alerts_description" placholder=" 15 Words" class="form-control" > -->
                                </div>
                               
                                <br>
                                <!-- <div class="form-group">
                                    <label>Post Status(Default is "1")</label>
                                    <input type="number" name="status" value="1" class="form-control">
                                </div> -->
                                <input type="submit" class="btn btn-primary" name="alertsBtn" value="Submit">
                            </form>
                        </div>
                    </div>        
                </div>
                    

        </div>
    </div>
</body>
</html>
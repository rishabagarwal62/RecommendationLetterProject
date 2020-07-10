<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation Letter Form</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body style="background-color: #E6AF2E">

    <div class="container mt-0">

        <!-- <form action="makepdf.php" method="post" class="offset-md-3 col-md-6"> -->

        <form action="makepdf.php" method="post" col-md-6>

            <h3 style="text-align: center;"><u>On The Go - Recommendation Letter Generator</u></h3>
            <p  style="text-align: center;" style= "margin: 0 ">Fill out the details below and a PDF will be downloaded</p>

            <div class="row mb-2">

                <div class="col-md-6">
                    <input type="text" name="ename" placeholder="Employer Name" class="form-control" >
                </div>

            </div>

            <div class="row mb-2">

                    <div class="col-md-6">
                        <input type="text" name="eaddress1" placeholder="Employer: Address Line 1" class="form-control" >
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="eaddress2" placeholder="Employer: Address Line 2" class="form-control" >
                    </div>

            </div>


            <div class="mb-2">

                <input type="text" name="date" placeholder="Date: DD-MM-YYYY" class="form-control" >

            </div>

            <div class="mb-2">

                <textarea name="letterHead" placeholder="Letter Head" class="form-control" ></textarea>
                <textarea name="letterBody" placeholder="Letter Body" class="form-control" ></textarea>
                <textarea name="letterConclusion" placeholder="Letter Conclusion" class="form-control" ></textarea>

            </div>

             <div class="row mb-2">

                <div class="col-md-6">

                    <input type="text" name="pname" placeholder="Professor Name" class="form-control" >
                    <input type="text" name="pdesignation" placeholder="Professor Designation" class="form-control" >
                    <input type="text" name="pdepartment" placeholder="Professor Department" class="form-control" >
                    <input type="text" name="uname" placeholder="University Name" class="form-control" >
                    <input type="text" name="uaddress" placeholder="University Address" class="form-control" >
                    

                </div>

            </div>

            <button type="submit" class="btn btn-success btn-lg btn-block">Create PDF</button><br>
        
        </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>15.1</title>
        <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>


    <body>
       
        <form method="post" id="posts" action="">
            <h1>ACTION</h1>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="ttl" placeholder="Text">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Text</label>
                <input type="text" class="form-control" id="desc" placeholder="Text">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
    <script>
        $(function(){
            $("#posts").submit(function(){
                var desc=$("#desc").val();
                var ttl=$("#ttl").val();
                var dataString = 'desc='+desc+' -- ttl='+ttl;
                console.log(dataString);

                $.ajax({
                    type:"POST",
                    url:"server/action.php",
                    data: dataString,
                    cache: true,
                    success: function(html){
                        $("#loader").after(html);
                        $("#loader").hide();
                        console.log(html);
                    }
                });
                return false;
            });
        });

    </script>
</html>

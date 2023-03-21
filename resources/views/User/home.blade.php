<form id="addCustomer" class="form-inline" method="POST" action="">
    <label for="name" class="sr-only">Name</label>
    <input id="name" type="text" class="form-control" name="name" placeholder="Name" required autofocus>
    <button id="submitCustomer" type="button" class="btn btn-primary mb-2">Submit</button>
</form>

<div class="card card-default">
    <div class="card-body">
        <form id="addUser" class="form-inline" method="POST" action="">
            <div class="form-group mb-2">
                <label for="name" class="sr-only">Name</label>
                <input type="hidden" id="nama" type="text" class="form-control" name="name" placeholder="Name" required autofocus>

                <input id="name" name="text" value="<?php echo $b ?>" readonly="yes">

            </div>

            <div class="form-group mx-sm-3 mb-2">
                <label for="email" class="sr-only">Email</label>
                <input id="telp" type="text" class="form-control" name="telp" placeholder="telp" required autofocus>

            </div>

            <input id="uid" name="uid">
            <?php echo $a ?>
            <button id="submitUser" type="button" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>

</div>
{{--Firebase Tasks--}}
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    };
    firebase.initializeApp(config);
    var database = firebase.database();
    var lastIndex = "";

    // Add Data
    $('#submitUser').on('click', function() {
        var values = $("#addUser").serializeArray();
        var name = values[0].value;
        var telp = values[1].value;
        var uid = values[2].value;

        console.log(values);

        firebase.database().ref('Users/' + uid).set({
            name: name,
            telp: telp,
            uid: uid,

        });

        // Reassign lastID value
        lastIndex = uid;
        $("#addUser input").val("");
    });
</script>
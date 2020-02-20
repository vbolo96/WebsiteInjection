<?php
//session_start();
$_SESSION['name'] = "";
require 'Credentials.php';
$con=mysqli_connect($host,$user,$passwd,$database) or die(mysqli_error($con));

if (isset($_POST['login_user'])) {
		
//    $username = $_POST['username'];
//    $password = $_POST['password'];
    $username = mysqli_real_escape_string($_POST['username']);
    $password = mysqli_real_escape_string($_POST['password']);
    $query = "SELECT * FROM users WHERE usern='$username' AND passwrd='$password'";
    $result=mysqli_query($con,$query);
    $rows = mysqli_fetch_array($result);
    if($rows)
    {
        echo "<script> alert('Bine ai venit pe site! Esti logat!'); </script>" ;
//        session_start();
//        $_SESSION["name"] = $_POST['username'];
//        echo '<br>'.$_SESSION["name"];
//        header("location:index.php");
//        $side='<table class="logedTbl">
//            <tr>
//            <div class="input-group">
//            <td><label><b>User logat: </b></label>$_SESSION["name"]</td>
//            <td><input type="submit" name="logoff"></td>
//            </div>
//        </tr>';
    }
    else
    {
        echo "<script> alert('Username sau parola gresita'); </script>";
    }
    
}
if (isset($_POST['logoff'])) {
    session_destroy();
    $side="";
}

if (isset($_POST['signup_user'])) {
		
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $tara = $_POST['tara'];
    $judet = $_POST['judet'];
    $oras = $_POST['oras'];
    $adresa = $_POST['adresa'];
    $codpostal = $_POST['codpostal'];
    $ok=0;
    //foreach ($_POST as $val) {
        if (!empty($_POST['username']) && !empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['telefon']) && !empty($_POST['tara']) && !empty($_POST['judet']) && !empty($_POST['oras']) && !empty($_POST['adresa']) && !empty($_POST['codpostal']) )
        {
            $ok=1;      
        }   
         else
         {
                echo "<script> alert('Nu ati completat toate campurile'); </script>";}

    if($ok==1)
    {
         $query = "INSERT INTO users (usern, nume, prenume, passwrd, email, numartel, tara, judet, oras, adresa, codpostal)
VALUES ('$username', '$nume', '$prenume','$password', '$email', '$telefon', '$tara', '$judet', '$oras', '$adresa', '$codpostal')";
         $result=mysqli_query($con,$query);
         $count=mysqli_affected_rows($result);
        if($result){
         //$_SESSION['myusername'] = $myusername;
        // $_SESSION['mypassword'] = $mypassword;
           echo "<script> alert('Cont creat cu success'); </script>";
           header("location:Login.php");
           
         }
          else {
             echo "<script> alert('Eroare creare cont'); </script>"; 
            }
         
    }  
}
    
    if (isset($_POST['newcar_btn'])) {
		
    $tip = $_POST['tipForm'];
    $producator = $_POST['producator'];
    $anulfabricatiei = $_POST['anulfabricatiei'];
    $kilometraj = $_POST['kilometraj'];
    $pret = $_POST['pret'];
    $combustibil = $_POST['combustibil'];
    $capacitatemotor = $_POST['capacitatemotor'];
    $taraorigine = $_POST['taraorigine'];
    $localitate = $_POST['localitate'];
    $usern = $_POST['usern'];
    //$imagine = $_POST['imagine'];
    $review = $_POST['review'];
    $ok=0;
    //foreach ($_POST as $val) {
        if (!empty($_POST['tipForm']) && !empty($_POST['producator']) && !empty($_POST['anulfabricatiei']) && !empty($_POST['kilometraj']) && !empty($_POST['pret']) && !empty($_POST['combustibil']) && !empty($_POST['taraorigine']) && !empty($_POST['capacitatemotor']) && !empty($_POST['localitate']) && !empty($_POST['review']) )
        {
            $query = "SELECT * FROM users WHERE usern='$usern'";
            $result=mysqli_query($con,$query);
            $nr=mysqli_num_rows($result);
            
            if($nr)
            {
                $ok=1;
            }
            else
            {
            echo "<script> alert('Nu aveti cont! Va rugam sa va creati un cont pentru a posta anunturi'); </script>";}
        }
         else
         {
                echo "<script> alert('Nu ati completat toate campurile'); </script>";}

    if($ok==1)
    {
         $query = "INSERT INTO cars (tip, producator, anulfabricatiei, kilometraj, pret, combustibil, capacitatemotor, taraorigine, localitate, review)
VALUES ('$tip', '$producator', '$anulfabricatiei', '$kilometraj', '$pret', '$combustibil', '$capacitatemotor', '$taraorigine', '$localitate', '$review')";
         $result=mysqli_query($con,$query);
         //$count=mysqli_affected_rows($con,$result);
        if($result){
         //$_SESSION['myusername'] = $myusername;
        // $_SESSION['mypassword'] = $mypassword;
           //header("location:index.php");
           echo "<script> alert('Anunt adaugat cu success!'); </script>";
         }
          else {
             echo "<script> alert('Adaugare esuata!'); </script>";
            }
         
    } 
    }
   

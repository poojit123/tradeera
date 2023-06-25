<?php
require_once('./mail.php');

if(isset($_POST['email'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'] ?? "NA";
    $message = $_POST['message'] ?? "NA";
    $product = $_POST['product'] ?? "NA";

    $body = '<html>
    <table>
        <tbody>
            <tr>
                <td><b>Name:</b> '.$name.'</td>
            </tr>
            <tr>
                <td><b>Email:</b> '.$email.'</td>
            </tr>
            <tr>
                <td><b>Phone no.:</b> '.$phone.'</td>
            </tr>
            <tr>
                <td><b>Message:</b> '.$message.'</td>
            </tr>
            <tr>
                <td><b>Product:</b> '.$product.'</td>
            </tr>
        </tbody>
    </table>
    </html>';

    $res = sendMail(['email'=> $email, 'subject'=>'Contact us', 'body'=>$body]);
    if($res){
        echo json_encode(['status'=>200, 'message'=> 'Email has been sent successfully.']);
    }else{
        echo json_encode(['status'=>500, 'message'=> 'Something went wrong, Please try again.']);
    }
}else{
    echo json_encode(['status'=>500, 'message'=> 'Something went wrong, Please try again.']);
}
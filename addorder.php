<?php
 include_once("connection.php");


  

  if(isset($_POST['Submit'])) {	
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $duedate =$_POST['duedate'];
    $item  = $_POST['item'];
    $item2  = $_POST['item2'];
    $item3  = $_POST['item3'];
    $item4  = $_POST['item4'];
    $item5  = $_POST['item5'];
    $item6  = $_POST['item6'];
    $item7  = $_POST['item7'];
    $item8  = $_POST['item8'];
    $item9  = $_POST['item9'];
    $item10  = $_POST['item10'];
    $item11  = $_POST['item11'];
    $item12  = $_POST['item12'];
    $item13  = $_POST['item13'];
    $item14  = $_POST['item14'];
    $item15  = $_POST['item15'];
    $item16  = $_POST['item16'];
    $item17  = $_POST['item17'];
    $item18  = $_POST['item18'];
    $item19  = $_POST['item19'];
    $item20  = $_POST['item20'];
    $item_price  = $_POST['item_price'];
    $quantity = $_POST['quantity'];

    $item_price2  = $_POST['item_price2'];
    $quantity2  = $_POST['quantity2'];

    $item_price3  = $_POST['item_price3'];
    $quantity3  = $_POST['quantity3'];
    $item_price4  = $_POST['item_price4'];
    $quantity4  = $_POST['quantity4'];
    $item_price5  = $_POST['item_price5'];
    $quantity5  = $_POST['quantity5'];
    $item_price6  = $_POST['item_price6'];
    $quantity6  = $_POST['quantity6'];
    $item_price7  = $_POST['item_price7'];
    $quantity7  = $_POST['quantity7'];
    $item_price8  = $_POST['item_price8'];
    $quantity8  = $_POST['quantity8'];
    $item_price9  = $_POST['item_price9'];
    $quantity9  = $_POST['quantity9'];
    $item_price10  = $_POST['item_price10'];
    $quantity10  = $_POST['quantity10'];
    $item_price11  = $_POST['item_price11'];
    $quantity11  = $_POST['quantity11'];
    $item_price12  = $_POST['item_price12'];
    $quantity12  = $_POST['quantity12'];
    $item_price13  = $_POST['item_price13'];
    $quantity13  = $_POST['quantity13'];
    $item_price14  = $_POST['item_price14'];
    $quantity14  = $_POST['quantity14'];
    $item_price15  = $_POST['item_price15'];
    $quantity15  = $_POST['quantity15'];
    $item_price16  = $_POST['item_price16'];
    $quantity16  = $_POST['quantity16'];
    $item_price17  = $_POST['item_price17'];
    $quantity17 = $_POST['quantity17'];
    $item_price18  = $_POST['item_price18'];
    $quantity18  = $_POST['quantity18'];
    $item_price19  = $_POST['item_price19'];
    $quantity19  = $_POST['quantity19'];
    $item_price20  = $_POST['item_price20'];
    $quantity20  = $_POST['quantity20'];
    $details = $_POST['details'];
    $details102 = $_POST['details102'];
    $details103 = $_POST['details103'];
    $details2 = $_POST['details2'];
    $details202 = $_POST['details202'];
    $details203 = $_POST['details203'];
    $details3 = $_POST['details3'];
    $details302 = $_POST['details302'];
    $details303 = $_POST['details303'];
    $details4 = $_POST['details4'];
    $details402 = $_POST['details402'];
    $details403 = $_POST['details403'];
    $details5 = $_POST['details5'];
    $details502 = $_POST['details502'];
    $details503 = $_POST['details503'];
    $details6 = $_POST['details6'];
    $details602 = $_POST['details602'];
    $details603 = $_POST['details603'];
    $details7 = $_POST['details7'];
    $details702 = $_POST['details702'];
    $details703 = $_POST['details703'];
    $details8 = $_POST['details8'];
    $details802 = $_POST['details802'];
    $details803 = $_POST['details803'];
    $details9 = $_POST['details9'];
    $details902 = $_POST['details902'];
    $details903 = $_POST['details903'];
    $details10 = $_POST['details10'];
    $details1002 = $_POST['details1002'];
    $details1003 = $_POST['details1003'];
    $details11 = $_POST['details11'];
    $details1102 = $_POST['details1102'];
    $details1103 = $_POST['details1103'];
    $details12 = $_POST['details12'];
    $details1202 = $_POST['details1202'];
    $details1203 = $_POST['details1203'];
    $details13 = $_POST['details13'];
    $details1302 = $_POST['details1302'];
    $details1303 = $_POST['details1303'];
    $details14 = $_POST['details14'];
    $details1402 = $_POST['details1402'];
    $details1403 = $_POST['details1403'];
    $details15 = $_POST['details15'];
    $details1502 = $_POST['details1502'];
    $details1503 = $_POST['details1503'];
    $details16 = $_POST['details16'];
    $details1602 = $_POST['details1602'];
    $details1603 = $_POST['details1603'];
    $details17 = $_POST['details17'];
    $details1702 = $_POST['details1702'];
    $details1703 = $_POST['details1703'];
    $details18 = $_POST['details18'];
    $details1802 = $_POST['details1802'];
    $details1803 = $_POST['details1803'];
    $details19 = $_POST['details19'];
    $details1902 = $_POST['details1902'];
    $details1903 = $_POST['details1903'];
    $details20 = $_POST['details20'];
    $details2002 = $_POST['details2002'];
    $details2003 = $_POST['details2003'];
    $orderdue  = $_POST['order_due'];
    $itemprice  = $_POST['item_price'];
    $advanceamount  = $_POST['advance_amount'];

        


    $result = "INSERT INTO orders (name, phone, duedate, item, item2, item3, item4, item5, item6, item7, item8, item9, item10, item11, 
    item12, item13, item14, item15, item16, item17, item18, item19, item20, item_price1, quantity,item_price2, quantity2,item_price3,quantity3, item_price4,quantity4,item_price5,quantity5, item_price6, quantity6, 
    item_price7,quantity7, item_price8,quantity8, item_price9,quantity9, item_price10,quantity10, item_price11,quantity11, item_price12,quantity12, item_price13,quantity13, item_price14,quantity14, item_price15,quantity15, item_price16,quantity16, item_price17,quantity17,
    item_price18,quantity18, item_price19,quantity19, item_price20,quantity20, details, details102, details103, details2, details203, details204,  details3, details302, details303, details4, 
    details402, details403, details5, details502, details503, details6, details602, details603,  details7, details702, details703,   details8, details802, details803, 
    details9, details902, details903, details10, details1002, details1003,  details11, details1102, details1103,  details12, details1202, details1203, 
    details13, details1302, details1303, details14, details1402, details1403, details15, details1502, details1503, details16, details1602, details1603,
    details17, details1702, details1703,  details18, details1802,details1803,  details19,  details1902, details1903, details20 ,
    details2002, details2003,order_due, item_price, advance_amount ) VALUES ('$name','$phone', '$duedate', '$item', '$item2', '$item3', '$item4', '$item5',
    '$item6', '$item7', '$item8', '$item9', '$item10', '$item11', '$item12', '$item13', '$item14', '$item15', '$item16', '$item17', '$item18', '$item19', '$item20',
    '$item_price1', '$quantity',  '$item_price2', '$quantity2', '$item_price3','$quantity3', '$item_price4','$quantity4',  '$item_price5','$quantity5', '$item_price6','$quantity6', '$item_price7','$quantity7', '$item_price8','$quantity8', '$item_price9','$quantity9', '$item_price10','$quantity10',
    '$item_price11','$quantity11', '$item_price12','$quantity12', '$item_price13','$quantity13', '$item_price14','$quantity14', '$item_price15','$quantity15', '$item_price16','$quantity16', '$item_price17','$quantity17', '$item_price18','$quantity18', '$item_price19','$quantity19', '$item_price20','$quantity20',
    '$details', '$details102', '$details103', '$details2', '$details203', '$details204', '$details3' ,'$details302', '$details303','$details4','$details402', '$details403',
    '$details5','$details502', '$details503', '$details6','$details602', '$details603', '$details7', '$details702', '$details703', '$details8', '$details802', '$details803',
    '$details9', '$details902', '$details903','$details10', '$details1002', '$details1003', '$details11', '$details1102','$details1103',
    '$details12', '$details1202','$details1203', '$details13', '$details1302', '$details1303', '$details14','$details1402', '$details1403',
    '$details15','$details1502', '$details1503', '$details16', '$details1602', '$details1603', '$details17', '$details1702', '$details1703','$details18',
    '$details1802', '$details1803', '$details19','$details1902', '$details1903', '$details20','$details2002', '$details2003', '$orderdue' , '$itemprice',
    '$advanceamount')";



  
  

    if(!mysqli_query($mysqli, $result)) {
      die('Error: ' . mysqli_error($mysqli));
  }
    else {
        
        //  $phone = $_POST['phone'];
        
        //  $parameters = [
     
        // 'message'   => 'Your Order Has Been Created in Shan Tailors',
        // 'sender_id' => '94777892087',
        // 'recipient' => $phone,
        // 'type'      => 'plain', // possible value: plain, mms, voice, whatsapp, default plain
        // ];

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, 'https://app.paid2marketing.com/api/v3/sms/send');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($parameters));
        // curl_setopt($ch, CURLOPT_HTTPHEADER, [
        //         'Authorization: Bearer 4|pDGutdgC8ck0DX3WtgJVS2YAuXkxAiOIVBAG36zE',
        //         'Content-Type: application/json',
        //         'Accept: application/json',
        // ]);

        // $get_sms_status = curl_exec($ch);
        
        // if (curl_errno($ch)) {
        //     $get_sms_status = curl_error($ch);
        // }
        
        // curl_close($ch);
        
          header("Location: index.php");
                
            }
            
    

      
  }

    mysqli_close($mysqli);
  

      

?>

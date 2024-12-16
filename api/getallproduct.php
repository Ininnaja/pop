<?php

    require_once('./dbcon.php');

    try {
        if($_SERVER['REQUEST_METHOD']=='GET') {
            $object = new stdClass();
            
            $stmt = $db->prepare('select * from index_product order by id desc');


            if($stmt->execute()){
                $num = $stmt->rowCount();
                if($num > 0) {

                    $object->Result = array();
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);

                        array_push($object->Result,$row);
                    }
                    $object->RespCode = 200;
                    $object->RespMessage = 'success';
                    http_response_code(200);
                }
                else {
                    $object->RespCode = 400;
                    $object->Log = 0;
                    $object->RespMessage = 'bad: not found data';
                    http_response_code(400);
                }

                echo json_encode($object);

            }
            else {
                $object->RespCode = 500;
                $object->Log = 1;
                $object->RespMessage = 'bad: bad boy';
                http_response_code(400);
            }

        }
        else {
            http_response_code(405);
        }

    }
    catch(PDOException $e) {
        http_response_code(500);
        echo $e->getMessage();
    }
?>
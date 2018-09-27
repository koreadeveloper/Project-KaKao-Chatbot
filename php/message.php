<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];
 
    switch($content)
    {
        case "메뉴1":
            echo '
                {
                    "message":
                    {
                        "text": "메뉴1을 선택하셨습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3","만든사람"]
                    }
                }';
            break;
 
        case "메뉴2":
            echo '
                {
                    "message":
                    {
                        "text": "메뉴2를 선택하셨습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3","만든사람"]
                    }
                }';
            break;
 
        case "메뉴3":
            echo '
                {
                    "message":
                    {
                        "text": "메뉴3을 선택하셨습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3","만든사람"]
                    }
                }';
            break;
            
        case "만든사람":
            echo '
                {
                    "message":
                    {
                        "text": "다음의 암호를 풀어보세요 : 66eM65Og7IKs656M7J2AIDIwMTjrhYTrj4QgMy0367CYIOq5gOyduOq3nOyeheuLiOuLpC4= "
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3","만든사람"]
                    }
                }';
            break;
 
        default:
            echo '
                {
                    "message":
                    {
                        "text": "잘못된 값입니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3","만든사람"]
                    }
                }';
            break;
    }
?>
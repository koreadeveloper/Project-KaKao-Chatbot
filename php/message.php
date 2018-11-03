<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];
 
    switch($content)
    {
        case "오늘급식":
            echo '
                {
                    "message":
                    {
                        "text": "[오늘 급식]"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["오늘급식", "내일급식", "어제급식","만든사람"]
                    }
                }';
            break;
 
        case "내일급식":
            echo '
                {
                    "message":
                    {
                        "text": "[내일 급식]"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["오늘급식", "내일급식", "어제급식","만든사람"]
                    }
                }';
            break;
 
        case "어제급식":
            echo '
                {
                    "message":
                    {
                        "text": "[어제 급식]"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["오늘급식", "내일급식", "어제급식","만든사람"]
                    }
                }';
            break;
            
        case "만든사람":
            echo '
                {
                    "message":
                    {
                        "text": "개발자는 현재 3학년 재학중입니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["오늘급식", "내일급식", "어제급식","만든사람"]
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
                        "buttons": ["오늘급식", "내일급식", "어제급식","만든사람"]
                    }
                }';
            break;
    }
?>
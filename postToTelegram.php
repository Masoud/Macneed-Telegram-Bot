<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('assets/lib/simple_html_dom.php');
$html = file_get_html('http://macneed.ir');
require_once 'assets/lib/Unirest.php';
$i = 0;
$href_single = $_GET['URL'];
$single = file_get_html($href_single);
foreach ($single->find('.single') as $title_single) {
    foreach ($single->find('.title h1') as $title_single) {
        $title_single = $title_single->innertext;
    }
    $first_p = 0;
    foreach ($single->find('.content p') as $content_single) {
        $content_single = $content_single->innertext;
        $headers = ['Accept' => 'application/json'];
        $first_p++;
        if ($first_p == 1) {
            break;
        }
    }
    foreach ($single->find('.content a') as $image_post) {
        $image_post_ = $image_post->href;
    }
    if (strpos($image_post_, 'http:') !== false) {
        $image_post_ = $image_post_;
    } else {
        $image_post_ = 'http:' . $image_post_;
    }
    foreach ($single->find('.sidebar_body a') as $dl_link) {
        $dl_link = $dl_link->href;
    }
    $content_single = str_replace('&nbsp;', ' ', $content_single);
    $content_single = str_replace('&zwnj;', ' ', $content_single);
    $contet_post = "<strong>🖥  " . $title_single . "</strong>\n\n"
    . $content_single . "
    ====================
    @MacNeed <a href='$image_post_'>&#x2060;</a>";
    $answer = $_GET['category'];
    if ($answer == "app") {
        $text = [
            'chat_id' => 'Your_ID',
            'text' => $contet_post,
            'parse_mode' => 'html',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        [
                            'text' => "🌐 توضیحات",
                            'url' => $href_single,
                            'callback_data' => '1'
                        ],
                        [
                            'text' => "📎 لینک دانلود",
                            'url' => $dl_link,
                            'callback_data' => '1'
                        ]
                    ]
                ]
            ])
        ];
    } 
    else {
        $text = [
            'chat_id' => 'Your_ID',
            'text' => $contet_post,
            'parse_mode' => 'html',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        [
                            'text' => "🌐 ادامه توضیحات",
                            'url' => $href_single,
                            'callback_data' => '2'
                        ]
                    ]
                ]
            ])
        ];
    }
    $response = Unirest\Request::post('https://api.telegram.org/bot(API_Token)/sendMessage', $headers, $text);
    $i++;
    if ($i == 1) {
        break;
    }
}
header("Location: /index.php");

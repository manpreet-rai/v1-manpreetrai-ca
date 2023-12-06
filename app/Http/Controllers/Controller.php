<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Redirector;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\View\View;
use Exception;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(): View {
        $sites = [
            [
                "url" => "bonsaihub.ca",
                "img" => "bonsaihub.ca.png",
                "svg" => "bonsaihub",
                "txt" => "Bonsai Hub - Canada"
            ],
            [
                "url" => "vancouvermotorsports.com",
                "img" => "vancouvermotorsports.com.png",
                "svg" => "vancouvermotorsports",
                "txt" => "Vancouver Motor Sports - Canada"
            ],
            [
                "url" => "quickdrivingsurrey.ca",
                "img" => "quickdrivingsurrey.ca.png",
                "svg" => "quickdrivingsurrey",
                "txt" => "Quickpass Driving School - Canada"
            ],
            [
                "url" => "play.google.com/store/apps/details?id=com.randoms.granthsahib",
                "img" => "granthsahib.png",
                "svg" => "granthsahib",
                "txt" => "Granth Sahib - Play Store"
            ],
            [
                "url" => "aryxo.com",
                "img" => "aryxo.com.png",
                "svg" => "aryxo",
                "txt" => "Aryxo eLearning - India"
            ],
            [
                "url" => "play.google.com/store/apps/details?id=in.figos.app",
                "img" => "figos.png",
                "svg" => "figos",
                "txt" => "Figos Kitchen - Play Store"
            ],
            [
                "url" => "play.google.com/store/apps/details?id=com.randoms.nitnem",
                "img" => "nitnem.png",
                "svg" => "nitnem",
                "txt" => "Nitnem - Play Store"
            ],
            [
                "url" => "randoms.in",
                "img" => "randoms.in.png",
                "svg" => "randoms",
                "txt" => "Randoms Studios - India"
            ]
        ];

        $skills = ['HTML', 'CSS ', 'Javascript', 'PHP', 'Python', 'Tailwind CSS', 'Bootstrap', 'Bulma', 'Laravel',
            '.NET', 'Node', 'WordPress', 'Shopify', 'React', 'Vue', 'Angular', 'jQuery', 'MySQL', 'PostgreSQL','Firebase',
            'DynamoDB', 'Jenkins', 'Ansible', 'Terraform', 'Vagrant', 'Packer', 'AWS', 'Azure', 'GCP', 'Docker', 'Kubernetes',
            'Git', 'Windows', 'Linux', 'MacOS', 'Photoshop', 'Illustrator', 'Figma', 'AdobeXD', '&nbsp;'
        ];

        return View('welcome', [
            "sites"  => $sites,
            "skills" => $skills
        ]);
    }

    public function store(Request $request): Redirector
    {
        $mail = new PHPMailer(true);
        $message = '';
        try {
            //Server settings
            $mail->isSMTP();                                                  //Send using SMTP
            $mail->Host       = env('MAIL_HOST');                        //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                        //Enable SMTP authentication
            $mail->Username   = env('MAIL_USERNAME');                   //SMTP username
            $mail->Password   = env('MAIL_PASSWORD');                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                 //Enable implicit TLS encryption
            $mail->Port       = env('MAIL_PORT');                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress(env('MAIL_TO'));                          //Add a recipient

            //Content
            $mail->isHTML(true);                                     //Set email format to HTML
            $mail->Subject = 'Query - '.env('APP_NAME');
            $mail->Body    = "Name- <b>$request->name</b><br>Contact- <b>$request->contact</b><br>Message- <b>$request->message</b><br>";
            $mail->AltBody = "Name- <b>$request->name</b><br>Contact- <b>$request->contact</b><br>Message- <b>$request->message</b>";

            $mail->send();

            $message = 'Your message just landed in my inbox. Talk to you soon :)';
        } catch (Exception $e) {
            $message = 'Message could not be sent at the moment. Retry later.';
        } finally {
            return redirect('/')->with('status', $message);
        }
    }
}

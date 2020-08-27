<?php

$name = $_POST['name'];
$email = $_POST['email'] ? $_POST['email'] : '<i>Не указано</i>';;
$phone = $_POST['phone'] ? $_POST['phone'] : '<i>Не указано</i>';
$message = $_POST['message'] ? $_POST['message'] : '<i>Не указано</i>';

$recipient = "gigienakrs@yandex.ru";
// $recipient = "san4es021@gmail.com";
$subject = "Форма обратной связи";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Protect&Feed <gigienakrs@yandex.ru>\r\n";

$formcontent = 
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
  xmlns="http://www.w3.org/1999/xhtml"
  style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
>
  <head
    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
  >
    <meta
      http-equiv="Content-Type"
      content="text/html; charset=utf-8"
      style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
    />
    <meta
      name="viewport"
      content="width=device-width"
      style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
    />
  </head>
  <body
    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;height: 100%;background: #efefef;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;width: 100% !important;\'
  >
    <table
      class="body-wrap"
      style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;height: 100%;background: #efefef;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;width: 100% !important;\'
    >
      <tr
        style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
      >
        <td
          class="container"
          style=\'margin: 0 auto !important;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;display: block !important;clear: both !important;max-width: 640px !important;\'
        >
          <!-- Message start -->
          <table
            style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;border-collapse: collapse;width: 100% !important;\'
          >
            <tr
              style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
            >
              <td
                align="center"
                class="masthead"
                style=\'margin: 0;padding: 80px 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;background-image: url(http://gigienakrs.ru/img/background.png);background-size: cover;color: white;\'
              >
                <h1
                  style=\'margin: 0 auto !important;padding: 0;font-size: 32px;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.25;margin-bottom: 20px;max-width: 90%;text-transform: uppercase;\'
                >
                  '.$subject.'
                </h1>
              </td>
            </tr>
            <tr
              style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
            >
              <td
                class="content"
                style=\'margin: 0;padding: 30px 35px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;background: white;\'
              >
                <h2
                  align="center"
                  style=\'margin: 0;padding: 0;font-size: 28px;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.25;margin-bottom: 20px;\'
                >
                  Сообщение с сайта
                </h2>

                <p
                  align="center"
                  style=\'margin: 0;padding: 0;font-size: 16px;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;font-weight: normal;margin-bottom: 20px;\'
                >
                  Отправил '.$name.'
                </p>

                <h3
                  class="m"
                  style=\'margin: 50px 0 20px 0;padding: 0;font-size: 24px;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.25;margin-bottom: 20px;\'
                >
                  Форма:
                </h3>

                <table
                  class="list"
                  style=\'margin: 30px 0 20px 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;border-collapse: collapse;width: 100% !important;\'
                >
                  <tr
                    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;background-color: #f5f5f5;border-top: 1px solid #ccc;\'
                  >
                    <td
                      style=\'margin: 0;padding: 5px 10px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      Имя
                    </td>
                    <td
                      align="right"
                      style=\'margin: 0;padding: 5px 10px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      '.$name.'
                    </td>
                  </tr>
                  <tr
                    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;background-color: #f5f5f5;border-top: 1px solid #ccc;\'
                  >
                    <td
                      style=\'margin: 0;padding: 5px 10px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      Email:
                    </td>
                    <td
                      align="right"
                      style=\'margin: 0;padding: 5px 10px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      '.$email.'
                    </td>
                  </tr>
                  <tr
                    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;background-color: #f5f5f5;border-top: 1px solid #ccc;\'
                  >
                    <td
                      style=\'margin: 0;padding: 5px 10px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      Номер телефона:
                    </td>
                    <td
                      align="right"
                      style=\'margin: 0;padding: 5px 10px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      '.$phone.'
                    </td>
                  </tr>
                  <tr
                    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;background-color: #f5f5f5;border-top: 1px solid #ccc;\'
                  >
                    <td
                      style=\'margin: 0;padding: 5px 10px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      Сообщение:
                    </td>
                    <td
                      align="right"
                      style=\'margin: 0;padding: 5px 10px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      '.$message.'
                    </td>
                  </tr>
                </table>

                <table
                  style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;border-collapse: collapse;width: 100% !important;\'
                >
                  <tr
                    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                  >
                    <td
                      align="center"
                      style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >
                      <p
                        style=\'margin: 0;padding: 0;font-size: 16px;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;font-weight: normal;margin-bottom: 20px;\'
                      >
                        <a
                          href="https://gigienakrs.ru/"
                          class="button"
                          style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;color: white;display: inline-block;background: #2A713E;border: solid #2A713E;border-width: 10px 20px 8px;font-weight: bold;text-decoration: none;border-radius: 4px;\'
                          >Перейти на сайт
                        </a>
                      </p>
                    </td>
                  </tr>
                </table>

                <p
                  style=\'margin: 0;padding: 0;font-size: 16px;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;font-weight: normal;margin-bottom: 20px;\'
                >
                  <em
                    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    >С Уважением,
                    <br
                      style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
                    />
                    – Protect&Feed
                  </em>
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr
        style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
      >
        <td
          class="container"
          style=\'margin: 0 auto !important;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;display: block !important;clear: both !important;max-width: 640px !important;\'
        >
          <!-- Message start -->
          <table
            style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;border-collapse: collapse;width: 100% !important;\'
          >
            <tr
              style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;\'
            >
              <td
                class="content footer"
                align="center"
                style=\'margin: 0;padding: 30px 35px;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;background: none;\'
              >
                <p
                  style=\'margin: 0;padding: 0;font-size: 14px;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;font-weight: normal;margin-bottom: 0;color: #888;text-align: center;\'
                >
                  Отправлено сайтом
                  <a
                    href="https://gigienakrs.ru/"
                    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;color: #888;text-decoration: none;font-weight: bold;\'
                    >gigienakrs.ru</a
                  >
                </p>
                <p
                  style=\'margin: 0;padding: 0;font-size: 14px;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;font-weight: normal;margin-bottom: 0;color: #888;text-align: center;\'
                >
                  <a
                    href="mailto:gigienakrs@yandex.ru"
                    style=\'margin: 0;padding: 0;font-size: 100%;font-family: &apos;Avenir Next&apos;, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;line-height: 1.65;color: #888;text-decoration: none;font-weight: bold;\'
                    >gigienakrs@yandex.ru
                  </a>
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>';

if(isset($name)) {
  mail($recipient, $subject, $formcontent, $headers);
};

?>

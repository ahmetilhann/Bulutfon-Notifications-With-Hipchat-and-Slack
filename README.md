# Bulutfon web hook ile Slack ve Hipchat Entegre Edilmesi
[Bulutfon] web hook ile bağlı olan santral numarasının aranılması ile [Slack] ve [Hipchat] uygulamalarının uyarılmasını ve istenilen bilginin Slack ve hipchat ortamlarında paylaşılmasını sağlar.

# Uygulamnın Özellikleri
Uygulamaya [Slack] ve [Hipchat] için eklenilmiş olan composer paketlerinin içerdikleri özellikleri destekler. Uygulama gelişime oldukça açık bir şekilde [Bertrand Meyer' in open-close] prensibine uygun olarak tasarlanmaya çalışılmıştır.
- [Slack Composer]
- [Hipchat Composer]

# Uygulama Nasıl Çalışır
- [Bulutfon] hesabınızdan uygulamalar>webhook yolu takip edilerek web hook açılır.
- "Yeni web kancası" butonuna tıklanır, tetılenecek santral numarası seçilir.
- Uygulamanın yüklü olduğu adres istenilen alana girilir.
- Uygulamada index.php içerisine arama yapıldığında gönderilmek istenen mesaj 'Process' sınıfındaki metodlar yardımıyla setlenir.
- Tetiklenecek uygulama bilgileri constants.php klasöründe istenilen yerlere girilir.
```sh
#Hipchat information
$token = 'Hipchat token';
$room = 'Oda adı';
$from = 'Kimden'; 

#Slack information
$weebhook_url = 'Slack web hook url'
$channel = '#kanalAdı'
```
NOT: Uygulamnın yüklü olduğu yere göre ssl sertifika hatası verebilir. Sertifika hatalarını [buradan] halledebilirsiniz.
### Version
1.0.0

License
----

The MIT License (MIT)

Copyright (c) 2015 Ahmet Aydoðdu

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

[Bulutfon]:https://www.bulutfon.com/
[Slack]:https://slack.com/
[Hipchat]:https://www.hipchat.com/
[buradan]:http://stackoverflow.com/questions/25924147/moving-curl-client-ssl-to-guzzle/25982590#25982590
[Slack Composer]:https://github.com/maknz/slack
[Hipchat Composer]:https://github.com/hipchat/hipchat-php





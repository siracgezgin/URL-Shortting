<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# URL-Shortting Uygulaması
[Kullanım Videosu](https://github.com/siracgezgin/url-shortting/blob/master/url-shortting-kullanimi.mp4)

Bu Laravel uygulaması, kullanıcıların uzun URL'leri kısaltarak daha kısa bir formata dönüştürebilmelerini sağlayan basit bir URL kısaltıcı uygulamasıdır. Kullanıcılar kısaltılmış URL'leri paylaşabilir ve bu URL'leri kullanarak orijinal uzun URL'lere erişebilirler.

### Uygulamanın Temel İşlevleri:

1. **URL Kısaltma:** Kullanıcılar uygulamaya uzun bir URL girebilirler. Uygulama bu uzun URL'yi kısaltır ve kullanıcıya daha kısa bir versiyonunu sunar.

2. **Kısaltılmış URL'lerin Yönlendirilmesi:** Kullanıcılar kısaltılmış bir URL'yi tarayıcılarına girerlerse, uygulama bu URL'yi orijinal uzun URL'ye yönlendirir.

3. **Veri Doğrulaması:** Uygulama, kullanıcıların geçersiz URL'leri veya eksik girişleri göndermesini önlemek için girişlerini doğrular. Örneğin, kullanıcının girdiği URL'nin gerçek bir URL olup olmadığını kontrol eder.

4. **URL Kısaltma Geçmişi:** Kullanıcılar daha önce kısaltılan URL'leri görebilir ve bu kısaltılmış URL'lere tekrar erişebilirler.

5. **Güvenlik:** Kısaltılmış URL'ler rastgele oluşturulan karakter dizilerinden oluşur, bu da tahmin edilmesini zorlaştırır ve güvenlik açısından daha iyidir.

6. **Kullanıcı Arayüzü:** Uygulama, kullanıcı dostu bir arayüze sahiptir. Kullanıcılar kolayca URL'lerini kısaltabilir, kısaltılmış URL'leri paylaşabilir ve geçmişlerini görebilirler.

Bu tür bir uygulama, genellikle web geliştirme pratiğinde yaygın olarak kullanılan bir örnektir ve Laravel gibi bir çerçeve kullanarak bu tür bir projeyi oluşturmak oldukça eğiticidir.

## Gereksinimler

- PHP 7.4 veya daha yeni bir sürüm
- Composer
- Web sunucusu (Apache, Nginx vb.)
- Bir veritabanı sunucusu (MySQL, PostgreSQL, SQLite vb.)

## Kurulum

1. Bu depoyu klonlayın veya ZIP dosyasını indirin.
2. Projeyi bir klasöre çıkartın.
3. Terminal veya komut istemcisini açın ve projenin kök dizinine gidin.
4. `composer install` komutunu çalıştırarak gerekli PHP bağımlılıklarını yükleyin.
5. `.env.example` dosyasını `.env` olarak kopyalayın ve kendi veritabanı ayarlarınızı yapın.
6. `php artisan key:generate` komutunu çalıştırarak uygulamanın gizli anahtarını oluşturun.
7. `php artisan migrate` komutunu çalıştırarak veritabanını oluşturun.
8. `php artisan serve` komutunu çalıştırarak yerel sunucuyu başlatın.

## Kullanım

1. Tarayıcınızı açın ve uygulamayı çalıştırdığınız yerel sunucuya gidin (genellikle http://localhost:8000).
2. Ana sayfada, uzun bir URL girin ve "Kısalt" düğmesine tıklayın.
3. Orijinal URL'nizin kısaltılmış bir versiyonunu alacaksınız. Bu kısaltılmış URL'yi paylaşabilir veya kullanabilirsiniz.

## Katkılar

Katkılarınızı memnuniyetle karşılıyoruz! Uygulamayı geliştirmek veya hata düzeltmek için bir katkıda bulunmak isterseniz, lütfen bir pull talebi gönderin veya bir sorun açın.

## Lisans

Bu proje MIT Lisansı altında lisanslanmıştır. Daha fazla bilgi için [LICENSE](LICENSE) dosyasını inceleyebilirsiniz.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

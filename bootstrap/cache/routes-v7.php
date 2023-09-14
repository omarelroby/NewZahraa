<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Dtd2eztOxkGhLf9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qIOJNVWdqKvxPD1J',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favourite-ebooks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fAN0sEnVfTWDv4nU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YaYbMLyuiARxzEX7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favourite-course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oB61nqOGveI1NeQw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favourite-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NxYPvSQT7qsdDF2k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lo0qcK2npDx7mt2P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-favourite-ebooks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SNNMKo5ugIzRMIrx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favourite-free-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i48QzjNbrWGF6GAi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A5bQLY59Q8gmJBAH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-favourite-free-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KvK60tBpz1DU5ZOj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-favourite-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AkOLowFKOsPkyYg8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-favourite-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BNzcCFA4PHD317Iz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favourite-online-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::svAeSFE02J3mrmDG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AuJiY9kd9OIi2FmI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-favourite-online-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ZLcdnfQM1SGtKLs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favourite-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3uaFNzq3BL6HqXeu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wr6zYsbi8HGYW21p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/buy-ebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Oe4qQ01SFsK8p7g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/buy-course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::knAYjfnUV71ZLEtx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer-ebook-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Igcj4Ngoczst5yUf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer-course-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Unb9UPCI4f8jfM45',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer-online-courses-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IfUiXrLGpKj1KZ7p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/online-course-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OLzTz0L8ZcF1YBHB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-online-course-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FMiVOa3ofI7stlCU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-quiz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qB9N5r72bV8VuOsJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/instructor-online-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eY8olgjxZrPVkXC6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-group-appointment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MpMqF5XTvY67Wifc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-month-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Bor6VfEGQkYXmvC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/instructor-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UvZmeGO2RqJ0zW6K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/instructor-groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KYfvz73RS9r2kmWT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/materials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EgSPtbbtHlmTOcjM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quizes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::21saW2VLJC5QOTVE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quiz-questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eBMpc75TLKiCEY2W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quiz-answers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pzw0LrnHnrdsEzEN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/instructor-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d34BZUndHUiMjt28',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/course-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2cW3NdQ6sqZ5oqg6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/free-video-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ilseKmCGlSz2BsAu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/online-course-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RVwhQO42U5YOENBE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ebook-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FXbJfCMdNZAaR4mK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s35pUivAb2TV72oz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/employments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GlBV0OckvqzdDoXJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/apply-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OwegJJrOk6JYwicP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CRhAwg9SAphkRzen',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lecturer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rUJUCrrNzXeZaO5q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RjGPjkmPC6AECsOE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ebooks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uADS801rU2HRkuEW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HWmZ2io8NJTFBVbd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2A7WoGudyLY5ti0P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dCrz2suMIfFS5A0r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/free-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RzU5PZ9k2suzHh7B',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/home-section' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WNwRppNvocfCtngX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BYbLOJRhkSyNP5G9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/online-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0pZVAstmYl73o8Ag',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kZZBPenvzhQLQhJJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/instructors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AdUzOTPrInCHg4Yi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZQO7bcViRsFHbNCu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/booking-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PQziNRgap2jUvoqn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/subscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6zshN2WJzVPNLm0c',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment-method' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ujIGuPN71SgB3QQd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b0L1jWf0PB5cMRkC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E3K9Y0UBrS3VJTFo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dates-instructors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z3pq5rU6JUa4y8pp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-session-dates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WY0NXt7QB3aSGoK9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l2D7zfUjo9A2NWrH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mEC8ogKaJa49O37n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/redirect-course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0WpeXaG1GTTVunmt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/redirect-online-course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rWalkqUNhDqyA91T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/redirect-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XPcQdDUboScICh2t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/error_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d3PTLRJ6VVcp1C15',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::thhqn0Jeau7ZchHT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AsRtKGRLU4SchWhD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FLeP3dWNTQBJR9zS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'country.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/country/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ebook.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ebook/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'page.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/page/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/freeVideos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'freeVideos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'freeVideos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/freeVideos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'freeVideos.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'setting.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'instructors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/attachments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/attachments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'courses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/courses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home-section' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home-section.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'home-section.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home-section/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home-section.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-courses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'online-courses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-courses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-courses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/question' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'question.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'question.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/question/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'question.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructor-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor-requests.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'instructor-requests.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructor-requests/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor-requests.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contacts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/videos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/index-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-course-index-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-indexes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/video-index-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-indexes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/indexes-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexes-videos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'indexes-videos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ebook-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook-orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ebook-orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ebook-orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook-orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course-orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'course-orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course-orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-course-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/online-course-orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coupon.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coupon/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'appointments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'appointments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'appointments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/booking-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'booking-appointments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'booking-appointments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/booking-appointments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'booking-appointments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employment.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employment/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-indexes-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::khDtQATrTcH9MIbJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-emails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-emails.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sending-emails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.emails',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/applyJob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'applyJob',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-method' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-method.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment-method.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-method/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-method.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|p(?|i/(?|delete\\-(?|materials/([^/]++)(*:50)|quiz/([^/]++)(*:70))|online\\-course\\-group/([^/]++)(*:108)|get\\-(?|e(?|books(?|/([^/]++)(*:145)|\\-related/([^/]++)(*:171))|mployment\\-application/([^/]++)(*:211))|free\\-videos(?|/([^/]++)(*:244)|\\-related/([^/]++)(*:270))|videos/([^/]++)(*:294)|online\\-courses(?|/([^/]++)(*:329)|\\-related/([^/]++)(*:355))|instructor/([^/]++)(*:383)|course(?|/([^/]++)(*:409)|\\-related/([^/]++)(*:435))|page/([^/]++)(*:457))|appointments\\-month/([^/]++)(*:494)|courses\\-videos/([^/]++)(*:526))|p(?|ointments/([^/]++)(?|(*:560)|/edit(*:573)|(*:581))|lyJob/([^/]++)(*:604)))|ttachments/([^/]++)(?|(*:636)|/edit(*:649)|(*:657)))|/c(?|ategories/([^/]++)(?|(*:693)|/edit(*:706)|(*:714))|o(?|u(?|ntry/([^/]++)(?|(*:747)|/edit(*:760)|(*:768))|rse(?|s/([^/]++)(?|(*:796)|/edit(*:809)|(*:817))|\\-orders/([^/]++)(?|(*:846)|/edit(*:859)|(*:867)))|pon/([^/]++)(?|(*:892)|/edit(*:905)|(*:913)))|ntacts/([^/]++)(?|(*:941)|/edit(*:954)|(*:962)))|ustomers/([^/]++)(?|(*:992)|/edit(*:1005)|(*:1014))|reate\\-indexes\\-videos/([^/]++)(*:1055))|/e(?|book(?|/([^/]++)(?|(*:1089)|/edit(*:1103)|(*:1112))|\\-orders/([^/]++)(?|(*:1142)|/edit(*:1156)|(*:1165)))|mployment/([^/]++)(?|(*:1197)|/edit(*:1211)|(*:1220)))|/pa(?|ge/([^/]++)(?|(*:1251)|/edit(*:1265)|(*:1274))|yment\\-method/([^/]++)(?|(*:1309)|/edit(*:1323)|(*:1332)))|/freeVideos/([^/]++)(?|(*:1366)|/edit(*:1380)|(*:1389))|/setting/([^/]++)(?|(*:1419)|/edit(*:1433)|(*:1442))|/in(?|structor(?|s(?|/([^/]++)(?|(*:1485)|/edit(*:1499)|(*:1508))|\\-attachs/([^/]++)(*:1536))|\\-requests/([^/]++)(?|(*:1568)|/edit(*:1582)|(*:1591)))|dex(?|/([^/]++)(*:1617)|\\-(?|create/([^/]++)(*:1646)|delete/([^/]++)(*:1670)|video(?|\\-delete/([^/]++)(*:1704)|s/([^/]++)(*:1723)))|es(?|/([^/]++)(*:1748)|\\-videos/(?|([^/]++)(*:1777)|create(*:1792)|([^/]++)(?|(*:1812)|/edit(*:1826)|(*:1835))))))|/home\\-section/([^/]++)(?|(*:1875)|/edit(*:1889)|(*:1898))|/online\\-course(?|s/([^/]++)(?|(*:1939)|/edit(*:1953)|(*:1962))|\\-(?|index(?|es/([^/]++)(*:1996)|\\-(?|create/([^/]++)(*:2025)|delete/([^/]++)(*:2049)))|groups/([^/]++)(*:2075)|orders/([^/]++)(?|(*:2102)|/edit(*:2116)|(*:2125))))|/qu(?|estion/([^/]++)(?|(*:2161)|/edit(*:2175)|(*:2184))|izes/([^/]++)(*:2207))|/video(?|s(?|/([^/]++)(?|(*:2242)|/edit(*:2256)|(*:2265))|\\-indexes/([^/]++)(*:2293))|\\-index\\-(?|create/([^/]++)(*:2330)|edit/([^/]++)(*:2352)|update/([^/]++)(*:2376)|delete/([^/]++)(*:2400)))|/group\\-attachments/([^/]++)(*:2439)|/booking\\-appointments/([^/]++)(?|(*:2482)|/edit(*:2496)|(*:2505))|/update\\-indexes\\-videos/([^/]++)(*:2548))/?$}sDu',
    ),
    3 => 
    array (
      50 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ut9JRcFWDgNMsvnI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      70 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DwBOBO1X1hIKYwIE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KGbOaXaDppLc1S0I',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RiXgMQfFR6TjOs8l',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BxMWdaZeFD63Kk1e',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZUF1dzbEKwoDTfZR',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IZuQABGCIai4OmLC',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rdwBiX99rL0YlKVj',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KRN0yeKVq0cOFptD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xxdlf625CXmp7XwY',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Nt7PV3vDgz1mdCT',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bS8hR5uiMbg3kiah',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::11GXg5iaHlWgVShZ',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KfzJFR1YqmqeC8SY',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::imvIo2KulfTcaII5',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xZJgu1ajXDPIG8Qy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5VHycRCADtDXDPus',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'appointments.show',
          ),
          1 => 
          array (
            0 => 'appointment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'appointments.edit',
          ),
          1 => 
          array (
            0 => 'appointment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      581 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'appointments.update',
          ),
          1 => 
          array (
            0 => 'appointment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'appointments.destroy',
          ),
          1 => 
          array (
            0 => 'appointment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteJob',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.show',
          ),
          1 => 
          array (
            0 => 'attachment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.edit',
          ),
          1 => 
          array (
            0 => 'attachment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      657 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.update',
          ),
          1 => 
          array (
            0 => 'attachment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.destroy',
          ),
          1 => 
          array (
            0 => 'attachment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.show',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.edit',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.update',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'country.destroy',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.show',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.edit',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.update',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'courses.destroy',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course-orders.show',
          ),
          1 => 
          array (
            0 => 'course_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course-orders.edit',
          ),
          1 => 
          array (
            0 => 'course_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      867 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course-orders.update',
          ),
          1 => 
          array (
            0 => 'course_order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'course-orders.destroy',
          ),
          1 => 
          array (
            0 => 'course_order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon.show',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon.edit',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon.update',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coupon.destroy',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.show',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.edit',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.update',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.destroy',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.show',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.edit',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.update',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customers.destroy',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v6m2KTsaqL11IByu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook.show',
          ),
          1 => 
          array (
            0 => 'ebook',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook.edit',
          ),
          1 => 
          array (
            0 => 'ebook',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook.update',
          ),
          1 => 
          array (
            0 => 'ebook',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ebook.destroy',
          ),
          1 => 
          array (
            0 => 'ebook',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook-orders.show',
          ),
          1 => 
          array (
            0 => 'ebook_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook-orders.edit',
          ),
          1 => 
          array (
            0 => 'ebook_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ebook-orders.update',
          ),
          1 => 
          array (
            0 => 'ebook_order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ebook-orders.destroy',
          ),
          1 => 
          array (
            0 => 'ebook_order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employment.show',
          ),
          1 => 
          array (
            0 => 'employment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employment.edit',
          ),
          1 => 
          array (
            0 => 'employment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employment.update',
          ),
          1 => 
          array (
            0 => 'employment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employment.destroy',
          ),
          1 => 
          array (
            0 => 'employment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.show',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.edit',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'page.destroy',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-method.show',
          ),
          1 => 
          array (
            0 => 'payment_method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-method.edit',
          ),
          1 => 
          array (
            0 => 'payment_method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1332 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-method.update',
          ),
          1 => 
          array (
            0 => 'payment_method',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment-method.destroy',
          ),
          1 => 
          array (
            0 => 'payment_method',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'freeVideos.show',
          ),
          1 => 
          array (
            0 => 'freeVideo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'freeVideos.edit',
          ),
          1 => 
          array (
            0 => 'freeVideo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'freeVideos.update',
          ),
          1 => 
          array (
            0 => 'freeVideo',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'freeVideos.destroy',
          ),
          1 => 
          array (
            0 => 'freeVideo',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.show',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.edit',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.update',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'setting.destroy',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructors.show',
          ),
          1 => 
          array (
            0 => 'instructor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructors.edit',
          ),
          1 => 
          array (
            0 => 'instructor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructors.update',
          ),
          1 => 
          array (
            0 => 'instructor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'instructors.destroy',
          ),
          1 => 
          array (
            0 => 'instructor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rbSG8hvTeepkGj49',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor-requests.show',
          ),
          1 => 
          array (
            0 => 'instructor_request',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor-requests.edit',
          ),
          1 => 
          array (
            0 => 'instructor_request',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor-requests.update',
          ),
          1 => 
          array (
            0 => 'instructor_request',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'instructor-requests.destroy',
          ),
          1 => 
          array (
            0 => 'instructor_request',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexes.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete-index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete-videos-index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FGldTp2U295waYpz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tlcHJPegKPqrw7gB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexes-videos',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexes-videos.create',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexes-videos.show',
          ),
          1 => 
          array (
            0 => 'indexes_video',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexes-videos.edit',
          ),
          1 => 
          array (
            0 => 'indexes_video',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexes-videos.update',
          ),
          1 => 
          array (
            0 => 'indexes_video',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'indexes-videos.destroy',
          ),
          1 => 
          array (
            0 => 'indexes_video',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home-section.show',
          ),
          1 => 
          array (
            0 => 'home_section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home-section.edit',
          ),
          1 => 
          array (
            0 => 'home_section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home-section.update',
          ),
          1 => 
          array (
            0 => 'home_section',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'home-section.destroy',
          ),
          1 => 
          array (
            0 => 'home_section',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-courses.show',
          ),
          1 => 
          array (
            0 => 'online_course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-courses.edit',
          ),
          1 => 
          array (
            0 => 'online_course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-courses.update',
          ),
          1 => 
          array (
            0 => 'online_course',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'online-courses.destroy',
          ),
          1 => 
          array (
            0 => 'online_course',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'onlineCourse.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-indexes.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-delete-index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'onlineCourse.groups',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-orders.show',
          ),
          1 => 
          array (
            0 => 'online_course_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2116 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-orders.edit',
          ),
          1 => 
          array (
            0 => 'online_course_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-orders.update',
          ),
          1 => 
          array (
            0 => 'online_course_order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'online-course-orders.destroy',
          ),
          1 => 
          array (
            0 => 'online_course_order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'question.show',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'question.edit',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'question.update',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'question.destroy',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DXmkTEUD1NCP6ldJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.show',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.edit',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.update',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videos.destroy',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-index.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-indexes.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-indexes.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-video-index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete-video-index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NwXa7OnKI2AIWQGR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'booking-appointments.show',
          ),
          1 => 
          array (
            0 => 'booking_appointment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'booking-appointments.edit',
          ),
          1 => 
          array (
            0 => 'booking_appointment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'booking-appointments.update',
          ),
          1 => 
          array (
            0 => 'booking_appointment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'booking-appointments.destroy',
          ),
          1 => 
          array (
            0 => 'booking_appointment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h7vsElf4KCBeumbn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Dtd2eztOxkGhLf9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@login',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5Dtd2eztOxkGhLf9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qIOJNVWdqKvxPD1J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@update_profile',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@update_profile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qIOJNVWdqKvxPD1J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fAN0sEnVfTWDv4nU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/favourite-ebooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_ebooks',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_ebooks',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fAN0sEnVfTWDv4nU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oB61nqOGveI1NeQw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/favourite-course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_course',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_course',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oB61nqOGveI1NeQw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NxYPvSQT7qsdDF2k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/favourite-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NxYPvSQT7qsdDF2k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SNNMKo5ugIzRMIrx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete-favourite-ebooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_ebooks',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_ebooks',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SNNMKo5ugIzRMIrx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i48QzjNbrWGF6GAi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/favourite-free-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_free_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_free_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::i48QzjNbrWGF6GAi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KvK60tBpz1DU5ZOj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete-favourite-free-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_free_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_free_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KvK60tBpz1DU5ZOj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AkOLowFKOsPkyYg8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete-favourite-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_courses',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_courses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AkOLowFKOsPkyYg8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BNzcCFA4PHD317Iz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete-favourite-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BNzcCFA4PHD317Iz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::svAeSFE02J3mrmDG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/favourite-online-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_online_courses',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@favourite_online_courses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::svAeSFE02J3mrmDG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ZLcdnfQM1SGtKLs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete-favourite-online-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_online_courses',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@delete_favourite_online_courses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9ZLcdnfQM1SGtKLs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YaYbMLyuiARxzEX7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/favourite-ebooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_ebooks',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_ebooks',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YaYbMLyuiARxzEX7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3uaFNzq3BL6HqXeu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/favourite-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_courses',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_courses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3uaFNzq3BL6HqXeu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A5bQLY59Q8gmJBAH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/favourite-free-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_free_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_free_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::A5bQLY59Q8gmJBAH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lo0qcK2npDx7mt2P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/favourite-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Lo0qcK2npDx7mt2P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AuJiY9kd9OIi2FmI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/favourite-online-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_online_courses',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@show_favourite_online_courses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AuJiY9kd9OIi2FmI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wr6zYsbi8HGYW21p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customer-logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@logout',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Wr6zYsbi8HGYW21p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Oe4qQ01SFsK8p7g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/buy-ebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@buy_ebook',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@buy_ebook',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5Oe4qQ01SFsK8p7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::knAYjfnUV71ZLEtx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/buy-course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@buy_course',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@buy_course',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::knAYjfnUV71ZLEtx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Igcj4Ngoczst5yUf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customer-ebook-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@customer_ebook_orders',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@customer_ebook_orders',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Igcj4Ngoczst5yUf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Unb9UPCI4f8jfM45' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customer-course-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@customer_course_orders',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@customer_course_orders',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Unb9UPCI4f8jfM45',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IfUiXrLGpKj1KZ7p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customer-online-courses-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@customer_online_courses_orders',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@customer_online_courses_orders',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IfUiXrLGpKj1KZ7p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OLzTz0L8ZcF1YBHB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/online-course-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@online_course_orders',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@online_course_orders',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OLzTz0L8ZcF1YBHB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FMiVOa3ofI7stlCU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-online-course-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_online_course_orders',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_online_course_orders',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FMiVOa3ofI7stlCU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qB9N5r72bV8VuOsJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-quiz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_quiz',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_quiz',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qB9N5r72bV8VuOsJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eY8olgjxZrPVkXC6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/instructor-online-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@instructor_onlineCourses',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@instructor_onlineCourses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eY8olgjxZrPVkXC6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MpMqF5XTvY67Wifc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-group-appointment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@get_group_appointments',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@get_group_appointments',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MpMqF5XTvY67Wifc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Bor6VfEGQkYXmvC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-month-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@get_month_group',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@get_month_group',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5Bor6VfEGQkYXmvC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UvZmeGO2RqJ0zW6K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/instructor-logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@logout',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UvZmeGO2RqJ0zW6K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KYfvz73RS9r2kmWT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/instructor-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@groups',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@groups',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KYfvz73RS9r2kmWT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EgSPtbbtHlmTOcjM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/materials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@materials',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@materials',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EgSPtbbtHlmTOcjM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::21saW2VLJC5QOTVE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quizes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@quizes',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@quizes',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::21saW2VLJC5QOTVE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ut9JRcFWDgNMsvnI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/delete-materials/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@delete_materials',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@delete_materials',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ut9JRcFWDgNMsvnI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DwBOBO1X1hIKYwIE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/delete-quiz/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@delete_quiz',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@delete_quiz',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DwBOBO1X1hIKYwIE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KGbOaXaDppLc1S0I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/online-course-group/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@online_courses_groups',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@online_courses_groups',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KGbOaXaDppLc1S0I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eBMpc75TLKiCEY2W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quiz-questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@quiz_questions',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@quiz_questions',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eBMpc75TLKiCEY2W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pzw0LrnHnrdsEzEN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quiz-answers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@quiz_answers',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@quiz_answers',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pzw0LrnHnrdsEzEN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d34BZUndHUiMjt28' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/instructor-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
          2 => 'auth:instructor-api',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@instructor_profile',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@instructor_profile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::d34BZUndHUiMjt28',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RiXgMQfFR6TjOs8l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-ebooks/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_ebooks',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_ebooks',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RiXgMQfFR6TjOs8l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BxMWdaZeFD63Kk1e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-ebooks-related/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_ebooks_related',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_ebooks_related',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BxMWdaZeFD63Kk1e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IZuQABGCIai4OmLC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-free-videos/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_free_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_free_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IZuQABGCIai4OmLC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rdwBiX99rL0YlKVj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-free-videos-related/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_free_videos_related',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_free_videos_related',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rdwBiX99rL0YlKVj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KRN0yeKVq0cOFptD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-videos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KRN0yeKVq0cOFptD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xxdlf625CXmp7XwY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-online-courses/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_online_courses',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_online_courses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Xxdlf625CXmp7XwY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Nt7PV3vDgz1mdCT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-online-courses-related/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_online_courses_related',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_online_courses_related',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2Nt7PV3vDgz1mdCT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bS8hR5uiMbg3kiah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-instructor/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_instructor',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_instructor',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bS8hR5uiMbg3kiah',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::11GXg5iaHlWgVShZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-course/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_course',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_course',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::11GXg5iaHlWgVShZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KfzJFR1YqmqeC8SY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-course-related/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_course_related',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_course_related',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KfzJFR1YqmqeC8SY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::imvIo2KulfTcaII5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@get_pages',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@get_pages',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::imvIo2KulfTcaII5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2cW3NdQ6sqZ5oqg6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/course-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@course_category',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@course_category',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2cW3NdQ6sqZ5oqg6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ilseKmCGlSz2BsAu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/free-video-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@free_video_category',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@free_video_category',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ilseKmCGlSz2BsAu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RVwhQO42U5YOENBE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/online-course-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@online_course_category',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@online_course_category',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RVwhQO42U5YOENBE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FXbJfCMdNZAaR4mK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ebook-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@Ebooks',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@Ebooks',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FXbJfCMdNZAaR4mK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s35pUivAb2TV72oz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@countries',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@countries',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::s35pUivAb2TV72oz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GlBV0OckvqzdDoXJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@employments',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@employments',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GlBV0OckvqzdDoXJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZUF1dzbEKwoDTfZR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-employment-application/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@get_employment_application',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@get_employment_application',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZUF1dzbEKwoDTfZR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OwegJJrOk6JYwicP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/apply-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ApplyJobController@store',
        'controller' => 'App\\Http\\Controllers\\api\\ApplyJobController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OwegJJrOk6JYwicP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CRhAwg9SAphkRzen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@categories',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@categories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CRhAwg9SAphkRzen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rUJUCrrNzXeZaO5q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lecturer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@lecturer',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@lecturer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rUJUCrrNzXeZaO5q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RjGPjkmPC6AECsOE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@customer_register',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@customer_register',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RjGPjkmPC6AECsOE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uADS801rU2HRkuEW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ebooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@eBook',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@eBook',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uADS801rU2HRkuEW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HWmZ2io8NJTFBVbd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@courses',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@courses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HWmZ2io8NJTFBVbd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2A7WoGudyLY5ti0P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@videos',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2A7WoGudyLY5ti0P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dCrz2suMIfFS5A0r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@pages',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@pages',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dCrz2suMIfFS5A0r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RzU5PZ9k2suzHh7B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/free-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@free_videos',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@free_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RzU5PZ9k2suzHh7B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WNwRppNvocfCtngX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/home-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@home_section',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@home_section',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WNwRppNvocfCtngX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BYbLOJRhkSyNP5G9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@setting',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@setting',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BYbLOJRhkSyNP5G9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0pZVAstmYl73o8Ag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/online-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@online_courses',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@online_courses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0pZVAstmYl73o8Ag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kZZBPenvzhQLQhJJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@questions',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@questions',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kZZBPenvzhQLQhJJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AdUzOTPrInCHg4Yi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/instructors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@instructors',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@instructors',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AdUzOTPrInCHg4Yi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZQO7bcViRsFHbNCu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@contact',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@contact',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZQO7bcViRsFHbNCu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xZJgu1ajXDPIG8Qy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/appointments-month/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@appointments',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@appointments',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xZJgu1ajXDPIG8Qy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PQziNRgap2jUvoqn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/booking-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@booking_appointments',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@booking_appointments',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PQziNRgap2jUvoqn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5VHycRCADtDXDPus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/courses-videos/{course_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@courses_videos',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@courses_videos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5VHycRCADtDXDPus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6zshN2WJzVPNLm0c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@subscription',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@subscription',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6zshN2WJzVPNLm0c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ujIGuPN71SgB3QQd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment-method',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@payment_methods',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@payment_methods',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ujIGuPN71SgB3QQd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b0L1jWf0PB5cMRkC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@forget_password',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@forget_password',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::b0L1jWf0PB5cMRkC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E3K9Y0UBrS3VJTFo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@reset_password',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@reset_password',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::E3K9Y0UBrS3VJTFo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z3pq5rU6JUa4y8pp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dates-instructors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@instructor_dates',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@instructor_dates',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Z3pq5rU6JUa4y8pp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WY0NXt7QB3aSGoK9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get-session-dates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@get_session_dates',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@get_session_dates',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WY0NXt7QB3aSGoK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l2D7zfUjo9A2NWrH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@pay',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@pay',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::l2D7zfUjo9A2NWrH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mEC8ogKaJa49O37n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@redirect_payment',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@redirect_payment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mEC8ogKaJa49O37n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0WpeXaG1GTTVunmt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/redirect-course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@redirect_payment_course',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@redirect_payment_course',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0WpeXaG1GTTVunmt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rWalkqUNhDqyA91T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/redirect-online-course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@redirect_payment_online_course',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@redirect_payment_online_course',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rWalkqUNhDqyA91T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XPcQdDUboScICh2t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/redirect-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\HomeController@redirect_booking',
        'controller' => 'App\\Http\\Controllers\\api\\HomeController@redirect_booking',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XPcQdDUboScICh2t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d3PTLRJ6VVcp1C15' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/error_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@error_payment',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@error_payment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::d3PTLRJ6VVcp1C15',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::thhqn0Jeau7ZchHT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:271:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:53:"function(){
        return \\View::make(\'test\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006660000000000000000";}";s:4:"hash";s:44:"04F764GQLOh5lpEFXcOrw/25aVQi9Gqv18JphlCFqVY=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::thhqn0Jeau7ZchHT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\LoginController@get',
        'controller' => 'App\\Http\\Controllers\\dashboard\\LoginController@get',
        'namespace' => 'App\\Http\\Controllers\\dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\LoginController@post',
        'controller' => 'App\\Http\\Controllers\\dashboard\\LoginController@post',
        'namespace' => 'App\\Http\\Controllers\\dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\dashboard\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers\\dashboard',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AsRtKGRLU4SchWhD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AsRtKGRLU4SchWhD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FLeP3dWNTQBJR9zS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FLeP3dWNTQBJR9zS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'categories.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'categories.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'categories.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'categories.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'category.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'categories.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'categories.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'country.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CountryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'country/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'country.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CountryController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CountryController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'country.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CountryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'country/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'country.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CountryController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CountryController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'country/{country}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'country.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CountryController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CountryController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'country/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'country.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CountryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'country/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'country.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CountryController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ebook/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ebook/{ebook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ebook/{ebook}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'ebook/{ebook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'ebook/{ebook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'page.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PagesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'page.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PagesController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PagesController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'page.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PagesController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PagesController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'page.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PagesController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PagesController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'page.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PagesController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PagesController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'page.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PagesController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PagesController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'page.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PagesController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PagesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'freeVideos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'freeVideos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'freeVideos.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'freeVideos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'freeVideos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'freeVideos.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'freeVideos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'freeVideos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'freeVideos.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'freeVideos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'freeVideos/{freeVideo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'freeVideos.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'freeVideos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'freeVideos/{freeVideo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'freeVideos.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'freeVideos.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'freeVideos/{freeVideo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'freeVideos.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'freeVideos.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'freeVideos/{freeVideo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'freeVideos.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\FreeVideosController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'setting.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'setting.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'setting.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'setting.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/{setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'setting.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'setting/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'setting.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'setting/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'setting.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructors.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructors.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'instructors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructors.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructors/{instructor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructors.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructors/{instructor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructors.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'instructors/{instructor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructors.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'instructors/{instructor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructors.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rbSG8hvTeepkGj49' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructors-attachs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorController@attachs',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorController@attachs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rbSG8hvTeepkGj49',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'customers.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CustomersController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CustomersController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'customers.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CustomersController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CustomersController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'customers.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CustomersController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CustomersController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'customers.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CustomersController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CustomersController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/{customer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'customers.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CustomersController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CustomersController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'customers.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CustomersController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CustomersController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'customers.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CustomersController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CustomersController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attachments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'attachments.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attachments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'attachments.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'attachments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'attachments.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attachments/{attachment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'attachments.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attachments/{attachment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'attachments.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'attachments/{attachment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'attachments.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'attachments/{attachment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'attachments.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AttachmentsController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'courses.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CoursesController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CoursesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'courses.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CoursesController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CoursesController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'courses.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CoursesController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CoursesController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'courses.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CoursesController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CoursesController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses/{course}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'courses.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CoursesController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CoursesController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'courses.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CoursesController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CoursesController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'courses.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CoursesController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CoursesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-section.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'home-section.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-section.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home-section/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'home-section.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-section.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'home-section.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-section.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home-section/{home_section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'home-section.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-section.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home-section/{home_section}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'home-section.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-section.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'home-section/{home_section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'home-section.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-section.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'home-section/{home_section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'home-section.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\HomeSectionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-courses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-courses.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-courses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-courses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-courses.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-courses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'online-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-courses.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-courses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-courses/{online_course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-courses.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-courses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-courses/{online_course}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-courses.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-courses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'online-courses/{online_course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-courses.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-courses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'online-courses/{online_course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-courses.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCoursesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'question.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'question',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'question.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'question.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'question/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'question.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'question.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'question',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'question.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'question.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'question/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'question.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'question.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'question/{question}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'question.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'question.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'question/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'question.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'question.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'question/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'question.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\QuestionsController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor-requests.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor-requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructor-requests.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor-requests.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor-requests/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructor-requests.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor-requests.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'instructor-requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructor-requests.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor-requests.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor-requests/{instructor_request}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructor-requests.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor-requests.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor-requests/{instructor_request}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructor-requests.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor-requests.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'instructor-requests/{instructor_request}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructor-requests.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor-requests.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'instructor-requests/{instructor_request}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'instructor-requests.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\InstructorRequestsController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'contacts.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\ContactsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ContactsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'contacts.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\ContactsController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ContactsController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'contacts.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\ContactsController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ContactsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'contacts.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\ContactsController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ContactsController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/{contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'contacts.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\ContactsController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ContactsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'contacts.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\ContactsController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ContactsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'contacts.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\ContactsController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ContactsController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'videos.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideosController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideosController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'videos.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideosController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideosController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'videos.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideosController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideosController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'videos.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideosController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideosController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos/{video}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'videos.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideosController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideosController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'videos/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'videos.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideosController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideosController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'videos/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'videos.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideosController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideosController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'index/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexesController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'onlineCourse.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-course-indexes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseIndexController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseIndexController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'onlineCourse.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'onlineCourse.groups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-course-groups/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseGroupsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseGroupsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'onlineCourse.groups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video-index.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos-indexes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'video-index.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'index-create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexesController@create_index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexesController@create_index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'indexes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-indexes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-course-index-create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseIndexController@create_index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseIndexController@create_index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'online-indexes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video-indexes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'video-index-create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@create_video_index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@create_video_index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'video-indexes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video-indexes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'video-index-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'video-indexes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'index-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexesController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexesController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'indexes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-indexes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'online-course-index-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseIndexController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseIndexController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'online-course-indexes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video-indexes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'video-index-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'video-indexes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-video-index' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'video-index-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-video-index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete-video-index' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'video-index-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\VideoIndexesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete-video-index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete-index' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'index-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexesController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete-index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete-videos-index' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'index-video-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete-videos-index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-delete-index' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'online-course-index-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseIndexController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseIndexController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'online-course-delete-index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tlcHJPegKPqrw7gB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'indexes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexesController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tlcHJPegKPqrw7gB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NwXa7OnKI2AIWQGR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'group-attachments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\MaterialGroupController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\MaterialGroupController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NwXa7OnKI2AIWQGR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DXmkTEUD1NCP6ldJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quizes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\ShowQuizController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ShowQuizController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DXmkTEUD1NCP6ldJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FGldTp2U295waYpz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'index-videos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexVideosController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexVideosController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FGldTp2U295waYpz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes-videos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'indexes-videos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'indexes-videos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes-videos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'indexes-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'indexes-videos.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes-videos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'indexes-videos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'indexes-videos.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes-videos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'indexes-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'indexes-videos.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes-videos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'indexes-videos/{indexes_video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'indexes-videos.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes-videos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'indexes-videos/{indexes_video}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'indexes-videos.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes-videos.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'indexes-videos/{indexes_video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'indexes-videos.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'indexes-videos.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'indexes-videos/{indexes_video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'indexes-videos.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook-orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ebook-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook-orders.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook-orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ebook-orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook-orders.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook-orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ebook-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook-orders.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook-orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ebook-orders/{ebook_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook-orders.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook-orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ebook-orders/{ebook_order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook-orders.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook-orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'ebook-orders/{ebook_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook-orders.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ebook-orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'ebook-orders/{ebook_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'ebook-orders.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EbookOrdersController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'course-orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'course-orders.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'course-orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'course-orders.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'course-orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'course-orders.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'course-orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-orders/{course_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'course-orders.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'course-orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-orders/{course_order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'course-orders.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'course-orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'course-orders/{course_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'course-orders.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'course-orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'course-orders/{course_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'course-orders.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CourseOrdersController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-course-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-course-orders.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-course-orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-course-orders.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'online-course-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-course-orders.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-course-orders/{online_course_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-course-orders.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'online-course-orders/{online_course_order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-course-orders.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'online-course-orders/{online_course_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-course-orders.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'online-course-orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'online-course-orders/{online_course_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'online-course-orders.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OnlineCourseOrdersController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'coupon.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupon/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'coupon.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'coupon.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'coupon.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupon/{coupon}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'coupon.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'coupon.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'coupon.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'appointments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'appointments.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'appointments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'appointments.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'appointments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'appointments.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'appointments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointments/{appointment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'appointments.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'appointments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointments/{appointment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'appointments.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'appointments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'appointments/{appointment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'appointments.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'appointments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'appointments/{appointment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'appointments.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\AppointmentsController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking-appointments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'booking-appointments.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking-appointments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking-appointments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'booking-appointments.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking-appointments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'booking-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'booking-appointments.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking-appointments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking-appointments/{booking_appointment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'booking-appointments.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking-appointments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking-appointments/{booking_appointment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'booking-appointments.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking-appointments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'booking-appointments/{booking_appointment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'booking-appointments.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booking-appointments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'booking-appointments/{booking_appointment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'booking-appointments.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\BookingAppointmentsController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'employment.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'employment.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'employment.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employment.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employment/{employment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'employment.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employment/{employment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'employment.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employment.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'employment/{employment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'employment.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'employment/{employment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'employment.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\EmploymentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v6m2KTsaqL11IByu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create-indexes-videos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::v6m2KTsaqL11IByu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::khDtQATrTcH9MIbJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-indexes-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::khDtQATrTcH9MIbJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h7vsElf4KCBeumbn' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-indexes-videos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\IndexOfIndexVideosController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::h7vsElf4KCBeumbn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send-emails.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send-emails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\SendEmailsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SendEmailsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send-emails.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send.emails' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sending-emails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\SendEmailsController@sending_emails',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SendEmailsController@sending_emails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send.emails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'applyJob' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applyJob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ApplyJobController@index',
        'controller' => 'App\\Http\\Controllers\\api\\ApplyJobController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'applyJob',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteJob' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'applyJob/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ApplyJobController@destroy',
        'controller' => 'App\\Http\\Controllers\\api\\ApplyJobController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deleteJob',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@subscriptions',
        'controller' => 'App\\Http\\Controllers\\HomeController@subscriptions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-method.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-method',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'payment-method.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-method.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-method/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'payment-method.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-method.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment-method',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'payment-method.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-method.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-method/{payment_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'payment-method.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-method.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-method/{payment_method}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'payment-method.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-method.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payment-method/{payment_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'payment-method.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-method.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payment-method/{payment_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'localeSessionRedirect',
          2 => 'localizationRedirect',
          3 => 'localeViewPath',
          4 => 'auth:admin',
        ),
        'as' => 'payment-method.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PaymentMethodsController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

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
            '_route' => 'generated::8JmY9UncOrnXj1Oa',
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
            '_route' => 'generated::ZDqlu6o3vYoinyGJ',
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
            '_route' => 'generated::zpu5L0XnmYWRi6E7',
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
            '_route' => 'generated::IR8XcKMUCbNBIcEA',
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
      '/api/favourite-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D2kZtXRWlbahVJpb',
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
            '_route' => 'generated::DStaixtioi7G33Gu',
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
            '_route' => 'generated::Z9vIl51fz5c7ZIvJ',
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
            '_route' => 'generated::qyUgiBiKQQjPyT1E',
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
            '_route' => 'generated::QpZrfh9INW2b1YRk',
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
            '_route' => 'generated::WC81IpKWql3kd93d',
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
            '_route' => 'generated::Ain4cZuv5LoyoI3w',
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
            '_route' => 'generated::TZoVA9KJ3dtxzNEE',
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
            '_route' => 'generated::KYvlrEvTZarnLDtt',
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
            '_route' => 'generated::zoJiwnsa8OQP4kDx',
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
      '/api/customer-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hDJumo6z1KOyCEOh',
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
            '_route' => 'generated::pTzu9V1miOlA65w2',
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
            '_route' => 'generated::MvomYvvexEEdaO23',
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
            '_route' => 'generated::8zhpa1hu4oX5rK65',
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
            '_route' => 'generated::pjX7TgTuPkpZGRvI',
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
            '_route' => 'generated::eASjyxZ4UTN2pO6V',
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
            '_route' => 'generated::TaU8U0pKIrGD2Kt3',
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
      '/api/course-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tDlPVfd4dmv8S0uF',
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
            '_route' => 'generated::slJYcxaG0nH8xyMQ',
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
            '_route' => 'generated::yC9Xwhd9YiUC820H',
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
            '_route' => 'generated::1iApELyLVXJ0stQf',
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
            '_route' => 'generated::vAVjhuwjBBKSBPas',
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
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kgKTTxoSGmLARlzx',
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
            '_route' => 'generated::Yya11z0KvhAZSTHC',
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
            '_route' => 'generated::7nLzbqPokJjAeelz',
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
            '_route' => 'generated::f0gg8KkrwArXo09C',
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
            '_route' => 'generated::Weoa3kOYsMxcs4n8',
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
            '_route' => 'generated::3u73TChzottCFwfN',
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
            '_route' => 'generated::t43ySS7H4r738lOR',
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
            '_route' => 'generated::87ggGmBRGVAcJHFO',
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
            '_route' => 'generated::uUqeGDjZBLFk8VmF',
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
            '_route' => 'generated::Fdv1y8jn5CagisFB',
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
            '_route' => 'generated::o3BCWCrnzZ60yO2j',
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
            '_route' => 'generated::CvQYBCRriZHyBl6B',
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
            '_route' => 'generated::7wKpqFqCAPlSOOQP',
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
            '_route' => 'generated::YfpWMNrvVGlNSrIp',
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
            '_route' => 'generated::bV0TSU2BkI79KwPe',
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
            '_route' => 'generated::n32YncfugD1Fj1uu',
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
            '_route' => 'generated::ZmZrgzxIKvV6Dx3b',
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
            '_route' => 'generated::TzaDrLrZXR3oobYx',
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
      '/api/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7S0dh5j0yUSLIEDC',
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
      '/api/instructor-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNuXP84SPmA9zWoW',
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
            '_route' => 'generated::ZW0zySL4eNaA3ICm',
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
            '_route' => 'generated::jeAj7z2km3mMp88Y',
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
            '_route' => 'generated::EZClFEepbCmJEdiS',
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
            '_route' => 'generated::0nUdxwHy99H5vpFK',
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
      '/store-indexes-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SHVE0BZ9gx1VnQ0G',
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
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/(?|get\\-(?|ebooks/([^/]++)(*:41)|free\\-videos/([^/]++)(*:69)|videos/([^/]++)(*:91)|online\\-courses/([^/]++)(*:122)|instructor/([^/]++)(*:149)|course/([^/]++)(*:172)|page/([^/]++)(*:193))|delete\\-(?|materials/([^/]++)(*:231)|quiz/([^/]++)(*:252))|online\\-course\\-group/([^/]++)(*:291))|ttachments/([^/]++)(?|(*:322)|/edit(*:335)|(*:343)))|/c(?|ategories/([^/]++)(?|(*:379)|/edit(*:392)|(*:400))|o(?|u(?|ntry/([^/]++)(?|(*:433)|/edit(*:446)|(*:454))|rse(?|s/([^/]++)(?|(*:482)|/edit(*:495)|(*:503))|\\-orders/([^/]++)(?|(*:532)|/edit(*:545)|(*:553))))|ntacts/([^/]++)(?|(*:582)|/edit(*:595)|(*:603)))|ustomers/([^/]++)(?|(*:633)|/edit(*:646)|(*:654))|reate\\-indexes\\-videos/([^/]++)(*:694))|/ebook(?|/([^/]++)(?|(*:724)|/edit(*:737)|(*:745))|\\-orders/([^/]++)(?|(*:774)|/edit(*:787)|(*:795)))|/page/([^/]++)(?|(*:822)|/edit(*:835)|(*:843))|/freeVideos/([^/]++)(?|(*:875)|/edit(*:888)|(*:896))|/setting/([^/]++)(?|(*:925)|/edit(*:938)|(*:946))|/in(?|structor(?|s(?|/([^/]++)(?|(*:988)|/edit(*:1001)|(*:1010))|\\-attachs/([^/]++)(*:1038))|\\-requests/([^/]++)(?|(*:1070)|/edit(*:1084)|(*:1093)))|dex(?|/([^/]++)(*:1119)|\\-(?|create/([^/]++)(*:1148)|delete/([^/]++)(*:1172)|video(?|\\-delete/([^/]++)(*:1206)|s/([^/]++)(*:1225)))|es(?|/([^/]++)(*:1250)|\\-videos/(?|([^/]++)(*:1279)|create(*:1294)|([^/]++)(?|(*:1314)|/edit(*:1328)|(*:1337))))))|/home\\-section/([^/]++)(?|(*:1377)|/edit(*:1391)|(*:1400))|/online\\-course(?|s/([^/]++)(?|(*:1441)|/edit(*:1455)|(*:1464))|\\-(?|index(?|es/([^/]++)(*:1498)|\\-(?|create/([^/]++)(*:1527)|delete/([^/]++)(*:1551)))|groups/([^/]++)(*:1577)|orders/([^/]++)(?|(*:1604)|/edit(*:1618)|(*:1627))))|/qu(?|estion/([^/]++)(?|(*:1663)|/edit(*:1677)|(*:1686))|izes/([^/]++)(*:1709))|/video(?|s(?|/([^/]++)(?|(*:1744)|/edit(*:1758)|(*:1767))|\\-indexes/([^/]++)(*:1795))|\\-index\\-(?|create/([^/]++)(*:1832)|edit/([^/]++)(*:1854)|update/([^/]++)(*:1878)|delete/([^/]++)(*:1902)))|/group\\-attachments/([^/]++)(*:1941)|/update\\-indexes\\-videos/([^/]++)(*:1983))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q66nWE1O86is8WdE',
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
      69 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tdnZgKybyh9GMyph',
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
      91 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H8LSaq69muqgNnLC',
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
      122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::85yY4No6JWl5sNwg',
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
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zaz7T1gu3nnHb56g',
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
      172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NCE5P6k9XpdQGzAn',
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
      193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Mj8IurNIJQM6caP',
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
      231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3zNyAeEqwnfKtj33',
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
      252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FoWT59Kd3XmBNYgE',
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
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qAhSgf7blsplxZB9',
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
      322 => 
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
      335 => 
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
      343 => 
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
      379 => 
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
      392 => 
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
      400 => 
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
      433 => 
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
      446 => 
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
      454 => 
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
      482 => 
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
      495 => 
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
      503 => 
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
      532 => 
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
      545 => 
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
      553 => 
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
      582 => 
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
      595 => 
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
      603 => 
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
      633 => 
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
      646 => 
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
      654 => 
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
      694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OOPDhegYmvhYoj5a',
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
      724 => 
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
      737 => 
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
      745 => 
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
      774 => 
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
      787 => 
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
      795 => 
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
      822 => 
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
      835 => 
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
      843 => 
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
      875 => 
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
      888 => 
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
      896 => 
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
      925 => 
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
      938 => 
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
      946 => 
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
      988 => 
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
      1001 => 
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
      1010 => 
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
      1038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xZMLP5d0AcYrBImo',
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
      1070 => 
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
      1084 => 
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
      1093 => 
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
      1119 => 
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
      1148 => 
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
      1172 => 
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
      1206 => 
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
      1225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uSICp3vAedoGsXD7',
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
      1250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0d2gHHOylYQXuJZT',
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
      1279 => 
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
      1294 => 
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
      1314 => 
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
      1328 => 
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
      1337 => 
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
      1377 => 
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
      1391 => 
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
      1400 => 
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
      1441 => 
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
      1455 => 
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
      1464 => 
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
      1498 => 
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
      1527 => 
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
      1551 => 
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
      1577 => 
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
      1604 => 
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
      1618 => 
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
      1627 => 
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
      1663 => 
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
      1677 => 
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
      1686 => 
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
      1709 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dKO3J6b1VNlJUCYY',
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
      1744 => 
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
      1758 => 
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
      1767 => 
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
      1795 => 
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
      1832 => 
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
      1854 => 
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
      1878 => 
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
      1902 => 
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
      1941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sA6Zoy5WF9iXpXB1',
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
      1983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1OX0EWASuoZulI6i',
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
    'generated::8JmY9UncOrnXj1Oa' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerController@login',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8JmY9UncOrnXj1Oa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZDqlu6o3vYoinyGJ' => 
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
        'as' => 'generated::ZDqlu6o3vYoinyGJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zpu5L0XnmYWRi6E7' => 
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
        'as' => 'generated::zpu5L0XnmYWRi6E7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D2kZtXRWlbahVJpb' => 
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
        'as' => 'generated::D2kZtXRWlbahVJpb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z9vIl51fz5c7ZIvJ' => 
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
        'as' => 'generated::Z9vIl51fz5c7ZIvJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qyUgiBiKQQjPyT1E' => 
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
        'as' => 'generated::qyUgiBiKQQjPyT1E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WC81IpKWql3kd93d' => 
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
        'as' => 'generated::WC81IpKWql3kd93d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ain4cZuv5LoyoI3w' => 
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
        'as' => 'generated::Ain4cZuv5LoyoI3w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TZoVA9KJ3dtxzNEE' => 
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
        'as' => 'generated::TZoVA9KJ3dtxzNEE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zoJiwnsa8OQP4kDx' => 
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
        'as' => 'generated::zoJiwnsa8OQP4kDx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IR8XcKMUCbNBIcEA' => 
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
        'as' => 'generated::IR8XcKMUCbNBIcEA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QpZrfh9INW2b1YRk' => 
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
        'as' => 'generated::QpZrfh9INW2b1YRk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DStaixtioi7G33Gu' => 
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
        'as' => 'generated::DStaixtioi7G33Gu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KYvlrEvTZarnLDtt' => 
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
        'as' => 'generated::KYvlrEvTZarnLDtt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hDJumo6z1KOyCEOh' => 
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
        'as' => 'generated::hDJumo6z1KOyCEOh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pTzu9V1miOlA65w2' => 
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
        'as' => 'generated::pTzu9V1miOlA65w2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MvomYvvexEEdaO23' => 
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
        'as' => 'generated::MvomYvvexEEdaO23',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8zhpa1hu4oX5rK65' => 
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
        'as' => 'generated::8zhpa1hu4oX5rK65',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pjX7TgTuPkpZGRvI' => 
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
        'as' => 'generated::pjX7TgTuPkpZGRvI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eASjyxZ4UTN2pO6V' => 
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
        'as' => 'generated::eASjyxZ4UTN2pO6V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TaU8U0pKIrGD2Kt3' => 
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
        'as' => 'generated::TaU8U0pKIrGD2Kt3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q66nWE1O86is8WdE' => 
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
        'as' => 'generated::q66nWE1O86is8WdE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tdnZgKybyh9GMyph' => 
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
        'as' => 'generated::tdnZgKybyh9GMyph',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H8LSaq69muqgNnLC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-videos/{slug}',
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
        'as' => 'generated::H8LSaq69muqgNnLC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::85yY4No6JWl5sNwg' => 
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
        'as' => 'generated::85yY4No6JWl5sNwg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zaz7T1gu3nnHb56g' => 
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
        'as' => 'generated::Zaz7T1gu3nnHb56g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NCE5P6k9XpdQGzAn' => 
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
        'as' => 'generated::NCE5P6k9XpdQGzAn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Mj8IurNIJQM6caP' => 
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
        'as' => 'generated::4Mj8IurNIJQM6caP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tDlPVfd4dmv8S0uF' => 
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
        'as' => 'generated::tDlPVfd4dmv8S0uF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::slJYcxaG0nH8xyMQ' => 
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
        'as' => 'generated::slJYcxaG0nH8xyMQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yC9Xwhd9YiUC820H' => 
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
        'as' => 'generated::yC9Xwhd9YiUC820H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1iApELyLVXJ0stQf' => 
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
        'as' => 'generated::1iApELyLVXJ0stQf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vAVjhuwjBBKSBPas' => 
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
        'as' => 'generated::vAVjhuwjBBKSBPas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kgKTTxoSGmLARlzx' => 
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
        'as' => 'generated::kgKTTxoSGmLARlzx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yya11z0KvhAZSTHC' => 
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
        'as' => 'generated::Yya11z0KvhAZSTHC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7nLzbqPokJjAeelz' => 
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
        'as' => 'generated::7nLzbqPokJjAeelz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f0gg8KkrwArXo09C' => 
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
        'as' => 'generated::f0gg8KkrwArXo09C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Weoa3kOYsMxcs4n8' => 
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
        'as' => 'generated::Weoa3kOYsMxcs4n8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3u73TChzottCFwfN' => 
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
        'as' => 'generated::3u73TChzottCFwfN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t43ySS7H4r738lOR' => 
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
        'as' => 'generated::t43ySS7H4r738lOR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::87ggGmBRGVAcJHFO' => 
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
        'as' => 'generated::87ggGmBRGVAcJHFO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uUqeGDjZBLFk8VmF' => 
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
        'as' => 'generated::uUqeGDjZBLFk8VmF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fdv1y8jn5CagisFB' => 
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
        'as' => 'generated::Fdv1y8jn5CagisFB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o3BCWCrnzZ60yO2j' => 
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
        'as' => 'generated::o3BCWCrnzZ60yO2j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CvQYBCRriZHyBl6B' => 
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
        'as' => 'generated::CvQYBCRriZHyBl6B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7wKpqFqCAPlSOOQP' => 
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
        'as' => 'generated::7wKpqFqCAPlSOOQP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YfpWMNrvVGlNSrIp' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@instructor_onlineCourses',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@instructor_onlineCourses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YfpWMNrvVGlNSrIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bV0TSU2BkI79KwPe' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@groups',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@groups',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bV0TSU2BkI79KwPe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n32YncfugD1Fj1uu' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@materials',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@materials',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::n32YncfugD1Fj1uu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZmZrgzxIKvV6Dx3b' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@quizes',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@quizes',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZmZrgzxIKvV6Dx3b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TzaDrLrZXR3oobYx' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@quiz_questions',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@quiz_questions',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TzaDrLrZXR3oobYx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3zNyAeEqwnfKtj33' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@delete_materials',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@delete_materials',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3zNyAeEqwnfKtj33',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FoWT59Kd3XmBNYgE' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@delete_quiz',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@delete_quiz',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FoWT59Kd3XmBNYgE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qAhSgf7blsplxZB9' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@online_courses_groups',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@online_courses_groups',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qAhSgf7blsplxZB9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7S0dh5j0yUSLIEDC' => 
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
        'as' => 'generated::7S0dh5j0yUSLIEDC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNuXP84SPmA9zWoW' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\api\\InstructorController@logout',
        'controller' => 'App\\Http\\Controllers\\api\\InstructorController@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DNuXP84SPmA9zWoW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZW0zySL4eNaA3ICm' => 
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
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:271:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:53:"function()
    {
        return \\View(\'/home\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000719d28cc0000000065165944";}";s:4:"hash";s:44:"2dsc6i7M2+p8Zfr3gE92Sqsj2rW6HWsrjhjQuKxgKxc=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZW0zySL4eNaA3ICm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jeAj7z2km3mMp88Y' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000719d28c10000000065165944";}";s:4:"hash";s:44:"9G5D6iD4OnGf5c0X3XtyrTMiwH06+bCr+TIUrhunlGg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jeAj7z2km3mMp88Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::EZClFEepbCmJEdiS' => 
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
        'as' => 'generated::EZClFEepbCmJEdiS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0nUdxwHy99H5vpFK' => 
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
        'as' => 'generated::0nUdxwHy99H5vpFK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::xZMLP5d0AcYrBImo' => 
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
        'as' => 'generated::xZMLP5d0AcYrBImo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::0d2gHHOylYQXuJZT' => 
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
        'as' => 'generated::0d2gHHOylYQXuJZT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sA6Zoy5WF9iXpXB1' => 
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
        'as' => 'generated::sA6Zoy5WF9iXpXB1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dKO3J6b1VNlJUCYY' => 
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
        'as' => 'generated::dKO3J6b1VNlJUCYY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uSICp3vAedoGsXD7' => 
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
        'as' => 'generated::uSICp3vAedoGsXD7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::OOPDhegYmvhYoj5a' => 
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
        'as' => 'generated::OOPDhegYmvhYoj5a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SHVE0BZ9gx1VnQ0G' => 
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
        'as' => 'generated::SHVE0BZ9gx1VnQ0G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1OX0EWASuoZulI6i' => 
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
        'as' => 'generated::1OX0EWASuoZulI6i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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

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
            '_route' => 'generated::FrkVdw2UQHg2OLgu',
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
            '_route' => 'generated::3DFodXjUqfAgHTqj',
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
            '_route' => 'generated::pLJloTcspMuqLlTh',
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
            '_route' => 'generated::h7nZ6CnxhK4A98I4',
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
            '_route' => 'generated::r0l3o2AKMOhr8JSW',
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
            '_route' => 'generated::bB9o8jmgwIFoCObX',
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
            '_route' => 'generated::bWshgkmXD7HMIGti',
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
            '_route' => 'generated::4rHcHyfHSTFRytK3',
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
            '_route' => 'generated::9zWONZfzrhXpUPje',
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
            '_route' => 'generated::LSVDiLXzSGXQ7Jfp',
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
            '_route' => 'generated::7oIBQ93YjRi1YPbU',
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
            '_route' => 'generated::2yRpLFM35cBqQs7B',
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
            '_route' => 'generated::4CBDTcBI0jwfa7gK',
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
            '_route' => 'generated::PPNuI6VGzBD7Vb2g',
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
      '/api/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z3fr4owgTVt72UX1',
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
            '_route' => 'generated::9R1p3zCNpuL9bfDH',
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
            '_route' => 'generated::mWczJVsZmW8uBnfP',
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
            '_route' => 'generated::XeDZ4i2n7lrKEhGX',
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
            '_route' => 'generated::XVlis4ha9Dm6q6wu',
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
            '_route' => 'generated::S7f4gCCagCzxOo9y',
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
            '_route' => 'generated::4iPBQQ4EZTzCed4w',
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
            '_route' => 'generated::bLXciO3SjQ489uQl',
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
            '_route' => 'generated::7uaMCCIvk89D1Zcf',
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
            '_route' => 'generated::sQ7Ce0DsGidXClng',
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
            '_route' => 'generated::mwM8E9E1NaKsM5ZN',
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
            '_route' => 'generated::qSMrXsXfyhRllq15',
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
            '_route' => 'generated::b1hQRNcSqQmQRQBt',
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
            '_route' => 'generated::koVBDXIAS1xi8Mxe',
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
            '_route' => 'generated::KaICIkutvRrgwykh',
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
            '_route' => 'generated::YISfuk8ZbYq1dpzu',
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
            '_route' => 'generated::dLh7zxpr7sAbbq8G',
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
            '_route' => 'generated::wrY4p0xnqoLHaTs0',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LP1KhQ8TvlXqXH67',
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
            '_route' => 'generated::TblcoKofHZvCdqHk',
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
            '_route' => 'generated::VDfYYnC0RXAURnUu',
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
            '_route' => 'generated::HNF3DZX1wWhCoBhv',
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
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/(?|get\\-(?|ebooks/([^/]++)(*:41)|free\\-videos/([^/]++)(*:69)|videos/([^/]++)(*:91)|online\\-courses/([^/]++)(*:122)|instructor/([^/]++)(*:149)|course/([^/]++)(*:172)|page/([^/]++)(*:193))|delete\\-materials/([^/]++)(*:228)|online\\-course\\-group/([^/]++)(*:266))|ttachments/([^/]++)(?|(*:297)|/edit(*:310)|(*:318)))|/c(?|ategories/([^/]++)(?|(*:354)|/edit(*:367)|(*:375))|o(?|u(?|ntry/([^/]++)(?|(*:408)|/edit(*:421)|(*:429))|rses/([^/]++)(?|(*:454)|/edit(*:467)|(*:475)))|ntacts/([^/]++)(?|(*:503)|/edit(*:516)|(*:524)))|ustomers/([^/]++)(?|(*:554)|/edit(*:567)|(*:575)))|/ebook/([^/]++)(?|(*:603)|/edit(*:616)|(*:624))|/page/([^/]++)(?|(*:650)|/edit(*:663)|(*:671))|/freeVideos/([^/]++)(?|(*:703)|/edit(*:716)|(*:724))|/setting/([^/]++)(?|(*:753)|/edit(*:766)|(*:774))|/in(?|structor(?|s(?|/([^/]++)(?|(*:816)|/edit(*:829)|(*:837))|\\-attachs/([^/]++)(*:864))|\\-requests/([^/]++)(?|(*:895)|/edit(*:908)|(*:916)))|dex(?|/([^/]++)(*:941)|\\-(?|create/([^/]++)(*:969)|delete/([^/]++)(*:992))|es/([^/]++)(*:1012)))|/home\\-section/([^/]++)(?|(*:1049)|/edit(*:1063)|(*:1072))|/online\\-course(?|s/([^/]++)(?|(*:1113)|/edit(*:1127)|(*:1136))|\\-(?|index(?|es/([^/]++)(*:1170)|\\-(?|create/([^/]++)(*:1199)|delete/([^/]++)(*:1223)))|groups/([^/]++)(*:1249)))|/question/([^/]++)(?|(*:1281)|/edit(*:1295)|(*:1304))|/video(?|s(?|/([^/]++)(?|(*:1339)|/edit(*:1353)|(*:1362))|\\-indexes/([^/]++)(*:1390))|\\-index\\-(?|create/([^/]++)(*:1427)|edit/([^/]++)(*:1449)|update/([^/]++)(*:1473)|delete/([^/]++)(*:1497))))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jX6xU9qJ4PsR2Vzy',
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
            '_route' => 'generated::CdyZeU5aJe9ZlNtX',
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
            '_route' => 'generated::AZGgd53qC5VZ14cF',
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
            '_route' => 'generated::1gJkZkHSHa9vc9wC',
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
            '_route' => 'generated::SWrXooGgpymviU1t',
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
            '_route' => 'generated::ngWbrhR8jl4mZ35g',
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
            '_route' => 'generated::v8igfrmwloazyatP',
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
      228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yjb2mgy6DdJXadxk',
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
      266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4RUG8zL59Rh7gDkm',
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
      297 => 
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
      310 => 
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
      318 => 
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
      354 => 
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
      367 => 
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
      375 => 
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
      408 => 
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
      421 => 
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
      429 => 
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
      454 => 
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
      467 => 
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
      475 => 
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
      503 => 
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
      516 => 
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
      524 => 
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
      554 => 
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
      567 => 
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
      575 => 
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
      603 => 
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
      616 => 
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
      624 => 
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
      650 => 
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
      663 => 
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
      671 => 
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
      703 => 
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
      716 => 
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
      724 => 
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
      753 => 
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
      766 => 
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
      774 => 
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
      816 => 
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
      829 => 
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
      837 => 
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
      864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HCQnnjsmZH8DAVdS',
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
      895 => 
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
      908 => 
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
      916 => 
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
      941 => 
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
      969 => 
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
      992 => 
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
      1012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uqWek4gBk8TJ9nIg',
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
      1049 => 
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
      1063 => 
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
      1072 => 
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
      1113 => 
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
      1127 => 
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
      1136 => 
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
      1170 => 
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
      1199 => 
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
      1223 => 
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
      1249 => 
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
      1281 => 
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
      1295 => 
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
      1304 => 
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
      1339 => 
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
      1353 => 
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
      1362 => 
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
      1390 => 
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
      1427 => 
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
      1449 => 
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
      1473 => 
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
      1497 => 
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
    'generated::FrkVdw2UQHg2OLgu' => 
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
        'as' => 'generated::FrkVdw2UQHg2OLgu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3DFodXjUqfAgHTqj' => 
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
        'as' => 'generated::3DFodXjUqfAgHTqj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pLJloTcspMuqLlTh' => 
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
        'as' => 'generated::pLJloTcspMuqLlTh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r0l3o2AKMOhr8JSW' => 
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
        'as' => 'generated::r0l3o2AKMOhr8JSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bWshgkmXD7HMIGti' => 
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
        'as' => 'generated::bWshgkmXD7HMIGti',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rHcHyfHSTFRytK3' => 
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
        'as' => 'generated::4rHcHyfHSTFRytK3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LSVDiLXzSGXQ7Jfp' => 
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
        'as' => 'generated::LSVDiLXzSGXQ7Jfp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7oIBQ93YjRi1YPbU' => 
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
        'as' => 'generated::7oIBQ93YjRi1YPbU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2yRpLFM35cBqQs7B' => 
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
        'as' => 'generated::2yRpLFM35cBqQs7B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PPNuI6VGzBD7Vb2g' => 
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
        'as' => 'generated::PPNuI6VGzBD7Vb2g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h7nZ6CnxhK4A98I4' => 
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
        'as' => 'generated::h7nZ6CnxhK4A98I4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9zWONZfzrhXpUPje' => 
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
        'as' => 'generated::9zWONZfzrhXpUPje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bB9o8jmgwIFoCObX' => 
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
        'as' => 'generated::bB9o8jmgwIFoCObX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4CBDTcBI0jwfa7gK' => 
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
        'as' => 'generated::4CBDTcBI0jwfa7gK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jX6xU9qJ4PsR2Vzy' => 
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
        'as' => 'generated::jX6xU9qJ4PsR2Vzy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CdyZeU5aJe9ZlNtX' => 
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
        'as' => 'generated::CdyZeU5aJe9ZlNtX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AZGgd53qC5VZ14cF' => 
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
        'as' => 'generated::AZGgd53qC5VZ14cF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1gJkZkHSHa9vc9wC' => 
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
        'as' => 'generated::1gJkZkHSHa9vc9wC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SWrXooGgpymviU1t' => 
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
        'as' => 'generated::SWrXooGgpymviU1t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ngWbrhR8jl4mZ35g' => 
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
        'as' => 'generated::ngWbrhR8jl4mZ35g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v8igfrmwloazyatP' => 
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
        'as' => 'generated::v8igfrmwloazyatP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z3fr4owgTVt72UX1' => 
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
        'as' => 'generated::Z3fr4owgTVt72UX1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9R1p3zCNpuL9bfDH' => 
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
        'as' => 'generated::9R1p3zCNpuL9bfDH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mWczJVsZmW8uBnfP' => 
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
        'as' => 'generated::mWczJVsZmW8uBnfP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XeDZ4i2n7lrKEhGX' => 
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
        'as' => 'generated::XeDZ4i2n7lrKEhGX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XVlis4ha9Dm6q6wu' => 
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
        'as' => 'generated::XVlis4ha9Dm6q6wu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S7f4gCCagCzxOo9y' => 
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
        'as' => 'generated::S7f4gCCagCzxOo9y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4iPBQQ4EZTzCed4w' => 
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
        'as' => 'generated::4iPBQQ4EZTzCed4w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bLXciO3SjQ489uQl' => 
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
        'as' => 'generated::bLXciO3SjQ489uQl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7uaMCCIvk89D1Zcf' => 
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
        'as' => 'generated::7uaMCCIvk89D1Zcf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sQ7Ce0DsGidXClng' => 
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
        'as' => 'generated::sQ7Ce0DsGidXClng',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mwM8E9E1NaKsM5ZN' => 
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
        'as' => 'generated::mwM8E9E1NaKsM5ZN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qSMrXsXfyhRllq15' => 
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
        'as' => 'generated::qSMrXsXfyhRllq15',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b1hQRNcSqQmQRQBt' => 
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
        'as' => 'generated::b1hQRNcSqQmQRQBt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::koVBDXIAS1xi8Mxe' => 
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
        'as' => 'generated::koVBDXIAS1xi8Mxe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KaICIkutvRrgwykh' => 
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
        'as' => 'generated::KaICIkutvRrgwykh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YISfuk8ZbYq1dpzu' => 
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
        'as' => 'generated::YISfuk8ZbYq1dpzu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dLh7zxpr7sAbbq8G' => 
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
        'as' => 'generated::dLh7zxpr7sAbbq8G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yjb2mgy6DdJXadxk' => 
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
        'as' => 'generated::yjb2mgy6DdJXadxk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4RUG8zL59Rh7gDkm' => 
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
        'as' => 'generated::4RUG8zL59Rh7gDkm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wrY4p0xnqoLHaTs0' => 
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
        'as' => 'generated::wrY4p0xnqoLHaTs0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LP1KhQ8TvlXqXH67' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007bb535ae0000000071eef21e";}";s:4:"hash";s:44:"snKhjQUrQTOHEtcgKwPOASeR7Lfi0N1VwinK9zuyjWY=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LP1KhQ8TvlXqXH67',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TblcoKofHZvCdqHk' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007bb535ad0000000071eef21e";}";s:4:"hash";s:44:"UycbaWhTHkSvuDObJ56EnIBLeR0MZeH6yDSNfSoHGTs=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TblcoKofHZvCdqHk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::VDfYYnC0RXAURnUu' => 
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
        'as' => 'generated::VDfYYnC0RXAURnUu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HNF3DZX1wWhCoBhv' => 
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
        'as' => 'generated::HNF3DZX1wWhCoBhv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::HCQnnjsmZH8DAVdS' => 
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
        'as' => 'generated::HCQnnjsmZH8DAVdS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::uqWek4gBk8TJ9nIg' => 
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
        'as' => 'generated::uqWek4gBk8TJ9nIg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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

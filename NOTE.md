# Finished
Config
    UI 
    Blocks
    Components
    Pages
    Presets
    Routes
Setup
    Laravel Setup
    Tabler Layout CDN
    Domain
Component
    Comp
    Block
    Pages
    Dash Pages
config
    ui
        components
        blocks
        pages
        presets










# Un Finished






list
    list group



Setup
    Component Page
    Component Element
    Static Site
    Serverless Site


Component Page
    Page YAML
    Component YAML

Component Page 
    Screens shot
    New Page
    Code Snippet










video-streaming






Documentation
    Local
    Cloud





Dash 
Pitch Slides












        
dash routes  (dash simple)
    routes only
    functions
    documentations

dash route (advance)
    static site
    cdn server
    serverless deploy
    cloud documentations

send email example
    links at glance


Dashboard Functions
    Auth Login
    Auth Logout

    Playground So Seeds
    Playground So Approve Seed
    Playground Transations Seeds
    
    Transation Export
    Transation Table
    SO Table
    Log Table


    Sheet Export Transation

    Sales Order Dashboard
        Weekly
        Monthly


dashboard simple static pages
    Auth
        choose admin profile
        login success
    dashboard
        new sales orders
        new sales order approve
    Subscription Management
        export transations
        export transations success
        sales order
        transations
    Help
        Documentations
        Playgrounds
            seed sales orders
            send chat bot widgets
    Settings
        settings admin accounts
        setting logout
        louout success















Dash MVP
    Dash Functions


CI/CD
    Testing Local
    Testing Cloud


Static Site for CDN
    Static Site Generate
    Static Site for CDN
    Static Site Testing
    Static Site Deploy CDN



Domain
    https://freedomain.one/Direct.sv?cmd=userDNSDone&refreshdns=Y&domainname=video-subscription.run.place


    https://nic.eu.org/arf/en/

    helio.eu.org


    https://nic.eu.org/arf/en/domain/new/


    



<?php


// Button Label
@include('_partials.components.button', [
    'content' => 'Home',
    'attributes' => [
      'href' => '#'  
    ],
]);


// Button Icon Label
@include('_partials.components.button', [
    'content' => [
        'icon' = 'home',
        'text' = 'Home'
    ],
    'attributes' => [
      'href' => '#'  
    ]
]);

// Buttons
@include('_partials.components.buttons', [
    [
        'content' => 'Home',
        'attributes' => [
            'href' => '#'  
        ],
    ],
    [
        'content' => 'About',
        'attributes' => [
            'href' => '#'  
        ],
    ],
    [
        'content' => 'Contact',
        'attributes' => [
            'href' => '#'  
        ],
    ],
]);

// Buttons Dflex Justify End
@include('_partials.components.buttons', [
    [
        'content' => 'Home',
        'attributes' => [
            'href' => '#'  
        ],
    ],
    [
        'content' => 'About',
        'attributes' => [
            'href' => '#'  
        ],
    ],
    [
        'content' => 'Contact',
        'attributes' => [
            'href' => '#'  
        ],
    ],
]);


@include('_partials.components.display-1', 'Display');
@include('_partials.components.display-2', 'Display');
@include('_partials.components.display-3', 'Display');
@include('_partials.components.display-4', 'Display');
@include('_partials.components.display-5', 'Display');
@include('_partials.components.display-6', 'Display');

@include('_partials.components.h-1', 'Header');
@include('_partials.components.h-2', 'Header');
@include('_partials.components.h-3', 'Header');
@include('_partials.components.h-4', 'Header');
@include('_partials.components.h-5', 'Header');
@include('_partials.components.h-6', 'Header');


@include('_partials.components.p', 'Paragraph');


@include('_partials.components.call-to-actions', [
    [
        'content' => 'Learn More',
        'attributes' => [
            'href' => '#',
            'class' => 'btn-outline-primary'
        ],
    ],
    [
        'content' => 'Repository',
        'attributes' => [
            'href' => '#',
            'class' => 'btn-outline-secondary'
        ],
    ],
    [
        'content' => 'Features',
        'attributes' => [
            'href' => '#',
            'class' => 'btn-outline-features'  
        ],
    ],
    [
        'content' => 'Get Started',
        'attributes' => [
            'href' => '#',
            'class' => 'btn-primary'
        ],
    ],
]);


@include('_partials.components.call-to-actions', [
    view('_partials.components.button', 'Home'),
    view('_partials.components.button', 'About'),
    view('_partials.components.button', 'Projects'),
    view('_partials.components.button', 'Contact'),
]);




Pages

Coming Soon



// Coming Soon Simple
@include('_partials.components.call-to-actions', [
    'layout'        => '',
    'background'    => '',
    'banner-hero'   => '',
]);


// Coming Soon Simple Background Animation
@include('_partials.components.call-to-actions', [
    'layout'        => '',
    'background'    => '',
    'banner-hero'   => '',
]);




// Coming Soon Banner Hero
@include('_partials.components.call-to-actions', [
    'layout'        => '',
    'background'    => '',
    'banner-hero'   => '',
]);



// Coming Soon Banner Hero Call to Action
@include('_partials.components.call-to-actions', [
    'layout'        => '',
    'background'    => '',
    'banner-hero'   => '',
]);





































# Dash Pages








# Get Started
```
$data = [
  'layout'  => 'layout.preset.some',
  'title'   => 'Get Started',
  'cards'   => [
    [
      'icon' => 'home',
      'title' => 'Pitch Dask',
      'subtitle' => 'Pitch Dask',
      'url' => url('/'),      
    ],
    [
      'icon' => 'home',
      'title' => 'Pitch Dask',
      'subtitle' => 'Dashboard App',
      'url' => url('/'),
    ],
    [
      'icon' => 'home', 
      'title' => 'Pitch Dask',
      'subtitle' => 'Screen Captures',
      'url' => url('/'),
    ],
    [
      'icon' => 'home',
      'title' => 'Project Manual',
      'subtitle' => 'Pitch Dask',
      'url' => url('/'),
    ],
  ],
];
```


# Coming Soon Simple
```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
        ],
        'footer'      => [],
  ]
];
```


# Coming Soon with Animated Background
```
$data = [
  [
       'layout'       => '',
       'bg-animation'      => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
        ],
        'footer'      => [],
  ]
];
```

# Coming Soon with Subscribe Channel
```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
          'call-to-actions' => ['Subscribe'],
        ],
        'footer'      => [],
  ]
];
```

# Coming Soon with Subscribe Channels
```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
          'call-to-actions' => ['Subscribe Models'],
        ],
        'models'      => [
          'all models',
          // all models
          // login models
          // redister models
          // subscribe links add
          // subscribe turn on / off
          'email subscribe',
          'subscribe channels',
          'facebooks',
          'youtubes',
          'telegram',
          'emails',
        ],
        'footer'      => [],
  ]
];
```


# Coming Soon with Live Counter
```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
          'countdown' => 'unix timestamp',
        ],
        'footer'      => [],
  ]
];
```


# Coming Soon all Components
```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
          'call-to-actions' => ['Subscribe Models'],
        ],
        'models'      => [
          'all models',
          // all models
          // login models
          // redister models
          // subscribe links add
          // subscribe turn on / off
          'email subscribe',
          'subscribe channels',
          'facebooks',
          'youtubes',
          'telegram',
          'emails',
        ],
        'footer'      => [],
  ]
];
```


# Site Down Simple
```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
        ],
        'footer'      => [],
  ]
];
```

# Site Down with Estimate Online Time

```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
          'subtitle'  => 'lorem',
        ],
        'footer'      => [],
  ]
];
```


# Site Down with Status Checker
```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
          'subtitle'  => 'lorem',
        ],
        'toast'       => 'Status Worker It is Offline',
        'footer'      => [],
  ]
];
```


```
$data = [
  [
       'layout'       => '',
       'banner-hero'  => [
          'title'     => 'lorem',
          'subtitle'  => 'lorem',
          'paragraph' => 'lorem',
          'subtitle'  => 'lorem',
        ],
        'toast'       => 'Status Worker It is Back Online',
        'footer'      => [],
  ]
];
```


# Choose Profiles
```
$data = [
  'title'       => '',
  'profiles'  => [
    [
      'name'  => '',
      'url'   => '',
      'image' => '',
    ]
  ]
];
```

# Login Success | call-to-actions
```
$data = [
  'icon-preset'       => '',
  'title'       => '',
  'subtitle'       => '',
  'paragraph'       => '',
  'call-to-actions' => ['Subscribe Models'],
  ]
];
```

# Logout Success | call-to-actions
```
$data = [
  'icon-preset'       => '',
  'title'       => '',
  'subtitle'       => '',
  'paragraph'       => '',
  'call-to-actions' => ['Subscribe Models'],
  ]
];
```



# Slides
```
$data = [
  'title'       => '',
  'slides'      => [
    [
      'url'       => '',
      'thumb_url' => '',
      'title'     => '',
    ],
    [
      'url'       => '',
      'thumb_url' => '',
      'title'     => '',
    ],
  ],
];
```


# Slide First
```
$data = [
  'title'       => '',
  'subtitle'       => '',
  'paragraph'       => '',
  ]
];
```


# Slide Last
```
$data = [
  'title'       => '',
  'subtitle'       => '',
  'paragraph'       => '',
  ]
];
```


# Slide Screenshot
```
$data = [
  'title'       => '',
  'subtitle'       => '',
  'img_url'       => '',
  ]
];
```


# Slide Feature

```
$data = [
  'title'       => '',
  'subtitle'       => '',
  'body'       => '',
  'img_url'       => '',
  ]
];
```


# Slide Further Readings
```
$data = [
  'title'       => [],
  'links'       => [],
];
```


# Slide Full Screen
```
$data = [
  'title'       => '',
  'slides'      => [
    [
      'url'       => '',
      'thumb_url' => '',
      'title'     => '',
    ],
    [
      'url'       => '',
      'thumb_url' => '',
      'title'     => '',
    ],
  ],
  'script' = 'open first slide'
];
```


# Pagination Tables
```
$data = [
  'title' => 'Pagination Tables',
  'cards' => [
    [
      'icon'     => '',
      'title'    => '',
      'subtitle' => '',
      'url'      => '',
    ],
  ],
];
```


# Sales Orders
```
$data = [
  'title' => 'Pagination Table',
  'table-headers' => [
  'rows' => [
    [
      ....
    ],
  ],
  'paginations' => '',
];
```

# Transactions
```
$data = [
  'title' => 'Pagination Table',
  'table-headers' => [
  'rows' => [
    [
      ....
    ],
  ],
  'paginations' => '',
];
```

# Dash Admin Logs
```
$data = [
  'title' => 'Pagination Table',
  'table-headers' => [
  'rows' => [
    [
      ....
    ],
  ],
  'paginations' => '',
];
```



# Admin Profiles
```
$data = [
  'title' => 'Pagination Table',
  'table-headers' => [
  'rows' => [
    [
      ....
    ],
  ],
];
```

# Manuals
```
$data = [
  'title' => 'Pagination Tables',
  'cards' => [
    [
      'icon'     => '',
      'title'    => '',
      'subtitle' => '',
      'url'      => '',
    ],
  ],
];
```


# Pitch Dask
```
$data = [
  'title' => 'Pagination Table',
  'slides' => [],
];
# Project Docs
$data = [
  'title' => 'Pagination Table',
  'pages' => [],
];
```


# Project Manual
```
$data = [
  'title' => 'Pagination Table',
  'pages' => [],
];
# Screen Captures
$data = [
  'title' => 'Pagination Table',
  'screens' => [],
];
```

# Screen Flows
```
$data = [
  'title' => 'Pagination Table',
  'flows' => [],
];
```

# Screen Flow Timeline
```
$data = [
  'title' => 'Pagination Table',
  'flows' => [],
];
```

# Screen Flow Fullscreen
```
$data = [
  'title' => 'Pagination Table',
  'flows' => [],
];
```


# Gallery Wireframe
```
$data = [
  'title' => 'Pagination Table',
  'gallery-preset' = '',
  'items' => [],
];
```

# Gallery Concept Illustration
```
$data = [
  'title' => 'Pagination Table',
  'gallery-preset' = '',
  'items' => [],
];
```

# Gallery Profile Illustration
```
$data = [
  'title' => 'Pagination Table',
  'gallery-preset' = '',
  'items' => [],
];
```


# Export Weekly
```
$data = [
  'title' => 'Pagination Table',
  'weeks' => [],
];
```




# Export Monthly
```
$data = [
  'title' => 'Pagination Table',
  'months' => [],
];
```




# Export Confirm
```
$data = [
  'title' => 'Pagination Table',
  'months' => [],
  'script' => 'Open Confirm'
];
```





# Export CSV
```
$data = [
  'title' => 'Pagination Table',
  'months' => [],
  'script' => 'Open Confirm'
];
```




# Export Google Sheet
```
$data = [
  'title' => 'Pagination Table',
  'months' => [],
  'script' => 'Open Confirm'
];
```


# Export Excel File
```
$data = [
  'title' => 'Pagination Table',
  'months' => [],
  'script' => 'Open Confirm'
];
```



# Learn CSV
```
$data = [
  'title' => 'Pagination Table',
  'months' => [],
  'script' => 'Open Confirm'
];
```

# Learn Google Sheet
```
$data = [
  'title' => 'Pagination Table',
  'months' => [],
  'script' => 'Open Confirm'
];
```

# Learn Excel Sheet
```
$data = [
  'title' => 'Pagination Table',
  'months' => [],
  'script' => 'Open Confirm'
];
```













# New Sales Orders
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
];
```

# New Sales Order Approve
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# New Sales Orders Offline
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# No New Sales Orders
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# New Sales Orders Rate Limit
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# New Sales Orders Toast Admin Logs
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# New Sales Orders Approved by another Admin
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# New Sales Orders Approve Processing
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# New Sales Orders Connection Error
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# New Sales Orders Back Online
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```

# New Sales Orders Offline
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```



# New Sales Orders Skeleton Loading
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```


# New Sales Orders Pre Loading
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'new-sales-orders' => [],
  'script' => 'asdf',
];
```



# Page Not Found
```
$data = [
  'icon-preset' => 'Realtime New Sales Orders',
  'title' => 'Realtime New Sales Orders',
  'call-to-actions' => [],
];
```


# Login Require
```
$data = [
  'icon-preset' => 'Realtime New Sales Orders',
  'title' => 'Realtime New Sales Orders',
  'call-to-actions' => [],
];
```










# Playgrounds
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'playgrounds' => 'Realtime New Sales Orders',
];
```



# Playground Bot Chats
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'call-to-actions' => [],
  'example-chats' => 'Realtime New Sales Orders',
];
```




# Playground Noti Emails
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'call-to-actions' => [],
  'example-emails' => 'Realtime New Sales Orders',
];
```





# Playground Seed Sales Orders
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'call-to-actions' => [],
  'example-emails' => 'Realtime New Sales Orders',
];
```


# Playground Seed Sales Order Approves
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'call-to-actions' => [],
  'example-emails' => 'Realtime New Sales Orders',
];
```




  








# Settings
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'settings' => [],
];
```



# Admin Profiles
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'settings' => [],
];
```


# Admin Profile Setting
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'settings' => [],
];
```


# My Profile
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'title-actions' => [],
  'settings' => [],
];
```


# My Profile Setting
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'settings' => [],
];
```


# Setting Logout
```
$data = [
  'title' => 'Realtime New Sales Orders',
  'subtitle' => 'Realtime New Sales Orders',
  'call-to-actions' => [],
];
```


    





https://github.com/CodeSeven/toastr?tab=readme-ov-file

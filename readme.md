# Laravel MongoDB Role Base Authentication Model

####**[Laravel 5.2](https://packagist.org/packages/laravel/laravel)**
####**MongoDB Library [Jens Segers](https://github.com/jenssegers/laravel-mongodb)**

---

### Things to Note are

* In AuthController validate method role is added
* In register.blade.php two option at registration
* In AuthController checked each value i.e. not an array -- Security Issue for MongoDB
* In AuthController changed the redirectPath base on the role registering
* In App\User.php role method added
* In App\Middlewares\ Folder Two MiddleWares Created InfluencerMiddleWare and BrandMiddleWare
* In Kernel.php MiddleWares registered
* In App\Http\Controllers Two Controllers Added BrandController and Influencer Controller
* In Brand Controller and Influencer Controller Two Methods Added
* In Routes.php Routes Added for Brands and Influencers
* In BrandController constructor added brand-middleware
* In InfluencerController constructor added influencer-middleware


---

Cheers Guys

I Spend a lot of time reading these things.

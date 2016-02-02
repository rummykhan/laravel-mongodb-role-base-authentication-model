# Laravel MongoDB Role Base Authentication Model

####**[Laravel 5.2](https://packagist.org/packages/laravel/laravel)**
####**MongoDB Library [Jens Segers](https://github.com/jenssegers/laravel-mongodb)**


### Things to Note are

* In AuthController validate method role is added *
* In register.blade.php two option at registration *
3. In AuthController checked each value i.e. not an array -- Security Issue for MongoDB
4. In AuthController changed the redirectPath base on the role registering
5. In App\User.php role method added
6. In App\Middlewares\ Folder Two MiddleWares Created InfluencerMiddleWare and BrandMiddleWare
7. In Kernel.php MiddleWares registered
8. In App\Http\Controllers Two Controllers Added BrandController and Influencer Controller
9. In Brand Controller and Influencer Controller Two Methods Added
10. In Routes.php Routes Added for Brands and Influencers
11. In BrandController constructor added brand-middleware
12. In InfluencerController constructor added influencer-middleware




Cheers Guys

-I Spend a lot of time reading these things.

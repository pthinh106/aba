<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Services\AboutUsService;
use App\Http\Services\ContactService;
use App\Http\Services\EmploymentService;
use App\Http\Services\ImmigrationService;
use App\Http\Services\ProductService;
use App\Http\Services\QuestionAndAnswerService;
use App\Http\Services\ProfileService;
use App\Http\Services\SpecialService;
use App\Http\Services\BusinessEstablishmentService;
use App\Http\Services\HomeService;
use App\Http\Services\LegalRepresentativeService;
use App\Http\Services\TaxLawService;
use App\Http\Services\WarrantyService;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $AboutUsService;
    protected $ContactService;
    protected $EmploymentService;
    protected $ImmigrationService;
    protected $ProductService;
    protected $QuestionAndAnswerService;
    protected $ProfileService;
    protected $SpecialService;
    protected $WarrantyService;
    protected $TaxLawService;
    protected $BusinessEstablishmentService;
    protected $LegalRepresentativeService;
    protected $HomeService;

    
    public function __construct(AboutUsService $AboutUsService, ContactService $ContactService, 
    EmploymentService $EmploymentService, ImmigrationService $ImmigrationService, HomeService  $HomeService,
    ProductService $ProductService, QuestionAndAnswerService $QuestionAndAnswerService, 
    ProfileService $ProfileService, SpecialService $SpecialService, WarrantyService $WarrantyService,
    TaxLawService $TaxLawService, BusinessEstablishmentService $BusinessEstablishmentService, LegalRepresentativeService $LegalRepresentativeService)
    {
        $this->AboutUsService = $AboutUsService;
        $this->ContactService = $ContactService;
        $this->EmploymentService = $EmploymentService;
        $this->ImmigrationService = $ImmigrationService;
        $this->ProductService = $ProductService;
        $this->QuestionAndAnswerService = $QuestionAndAnswerService;
        $this->ProfileService = $ProfileService;
        $this->SpecialService = $SpecialService;
        $this->WarrantyService = $WarrantyService;
        $this->TaxLawService = $TaxLawService;
        $this->BusinessEstablishmentService = $BusinessEstablishmentService;
        $this->LegalRepresentativeService = $LegalRepresentativeService;
        $this->HomeService = $HomeService;
    }



    public function changeLanguage($language)
{
        Session::put('website_language', $language);

    return redirect()->back();
}



    public function index(){

        config(['app.title'=>'Home']);
        config(['app.descriptions'=>'Home']);
        $data = $this->HomeService->getHome();
        if(isset($data['home']->seo_title)){
            config(['app.title'=>$data['home']->seo_title]);
        }

        if(isset($data['home']->description)){
            config(['app.descriptions'=>$data['home']->description]);
        }

        
        // config(['app.title'=>$detail_menu->seo_title]);
        // config(['app.descriptions'=>$detail_menu->description]);
        // config(['app.canonical'=>"https://huongdang.vn/".$detail_menu->slug]);
        return view('home.index',[
            'title'=>"Trang chủ",
            'data'=>$data['home'],
            'arrHomeBox'=>$data['arrHomeBox']
        ]);
    }

    public function questionsAnswers (){
        config(['app.title'=>'Questions and Answers']);
        config(['app.descriptions'=>'Questions and Answers']);

        $data = $this->QuestionAndAnswerService->getQuestionAndAnswer();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Câu hỏi và trả lời",
            'data'=>$data
        ]);
    }

    public function aboutUs(){
        config(['app.title'=>'About Us']);
        config(['app.descriptions'=>'About Us']);
        
        $data = $this->AboutUsService->getAboutUs();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function immigration(){
        config(['app.title'=>'Immigration']);
        config(['app.descriptions'=>'Immigration']);
        $data = $this->ImmigrationService->getImmigration();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function newBusinessEstablishmentProductPromotion(){
        config(['app.title'=>'New Business Establishment Product Promotion']);
        config(['app.descriptions'=>'New Business Establishment Product Promotion']);
        $data = $this->BusinessEstablishmentService->getBusinessEstablishment();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function translationAndInterpretation(){

        config(['app.title'=>'Tax Law']);
        config(['app.descriptions'=>'Tax Law']);
        $data = $this->TaxLawService->getTaxLaw();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function warranty(){
        config(['app.title'=>'Warranty']);
        config(['app.descriptions'=>'Warranty']);
        $data = $this->WarrantyService->getWarranty();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function representativeBroker(){
        config(['app.title'=>'Legal Representative']);
        config(['app.descriptions'=>'Legal Representative']);
        $data = $this->LegalRepresentativeService->getLegalRepresentative();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function employment(){
        config(['app.title'=>'Employment']);
        config(['app.descriptions'=>'Employment']);
        $data = $this->EmploymentService->getEmployment();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function products(){
        config(['app.title'=>'Products']);
        config(['app.descriptions'=>'Products']);
        $data = $this->ProductService->getProduct();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function profile(){
        config(['app.title'=>'Cẩm Linh Profile']);
        config(['app.descriptions'=>'Cẩm Linh Profile']);
        $data = $this->ProfileService->getProfile();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    public function special(){
        config(['app.title'=>'Paying Legal Fees']);
        config(['app.descriptions'=>'Paying Legal Fees']);
        $data = $this->SpecialService->getSpecial();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    // public function taxLaw(){
    //     config(['app.title'=>'Tax Law']);
    //     config(['app.descriptions'=>'Tax Law']);
    //     $data = $this->TaxLawService->getTaxLaw();
    //     if(isset($data->seo_title)){
    //         config(['app.descriptions'=>$data->description]);
    //     }

    //     if(isset($data->description)){
    //         config(['app.descriptions'=>$data->description]);
    //     }
    //     return view('home.category-v2',[
    //         'title'=>"Về chúng tôi",
    //         'data'=>$data
    //     ]);
    // }

    public function contact(){

        config(['app.title'=>'Contact']);
        config(['app.descriptions'=>'Contact']);
        $data = $this->ContactService->getContact();
        if(isset($data->seo_title)){
            config(['app.descriptions'=>$data->description]);
        }

        if(isset($data->description)){
            config(['app.descriptions'=>$data->description]);
        }
        return view('home.category-v2',[
            'title'=>"Về chúng tôi",
            'data'=>$data
        ]);
    }

    

    // public function sitemap(){
    //     $data = DB::table('menus')->where('active', 1)->get();
    //     return view('home.sitemap',[
    //         'title'=>"Tin Tức",
    //         'data'=>$data
    //     ]);
    // }
}

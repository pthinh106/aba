<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\AboutUsService;
use App\Http\Services\ContactService;
use App\Http\Services\EmploymentService;
use App\Http\Services\ImmigrationService;
use App\Http\Services\ProductService;
use App\Http\Services\QuestionAndAnswerService;
use App\Http\Services\ProfileService;
use App\Http\Services\SpecialService;
use App\Http\Services\WarrantyService;
use App\Http\Services\TaxLawService;
use App\Http\Services\BusinessEstablishmentService;
use App\Http\Services\LegalRepresentativeService;
use App\Http\Services\HomeService;


class MainController extends Controller
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

    public function index(){
        
    }



    public function home(){
        $home = $this->HomeService->getHomeAll();
        return view('admin.home-v2',[
            'title'=>"Home",
            'detail'=>$home['home'],
            'arrHomeBox'=>$home['arrHomeBox']
        ]);
    }

    public function updateHome(Request $request){
        $this->HomeService->updateHome($request);
        return redirect()->back();
    }


    public function aboutUs (){

        $aboutUs = $this->AboutUsService->getAboutUs();
        return view('admin.about-us',[
            'title'=> 'About Us',
            'detail'=>$aboutUs,
        ]);
    }

    public function updateAboutUs(Request $request){
        $this->AboutUsService->updateAboutUs($request);
        return redirect()->back();
    }

    public function contact(){
        $contact = $this->ContactService->getContact();
        return view('admin.contact',[
            'title'=>"Liên hệ",
            'detail'=>$contact,
        ]);
    }

    public function updateContact(Request $request){
        $this->ContactService->updateContact($request);
        return redirect()->back();
    }


    public function immigration(){
        $immigration = $this->ImmigrationService->getImmigration();
        return view('admin.immigration',[
            'title'=>"Di trú",
            'detail'=>$immigration,
        ]);
    }

    public function updateImmigration(Request $request){
        $this->ImmigrationService->updateImmigration($request);
        return redirect()->back();
    }

    public function newBusinessEstablishmentProductPromotion(){
        $BusinessEstablishment = $this->BusinessEstablishmentService->getBusinessEstablishment();
        return view('admin.new-business-establishment-product-promotion',[
            'title'=>"Thành lập doanh nghiệp và khuyến mãi sản phẩm",
            'detail'=>$BusinessEstablishment,
        ]);
    }

    public function updateNewBusinessEstablishmentProductPromotion(Request $request){
        $this->BusinessEstablishmentService->updateBusinessEstablishment($request);
        return redirect()->back();
    }

    public function translationAndInterpretation(){
        $TaxLaw = $this->TaxLawService->getTaxLaw();
        return view('admin.translation-and-interpretation',[
            'title'=>"Dịch và phiên dịch",
            'detail'=>$TaxLaw,
        ]);
    }

    public function updateTranslationAndInterpretation(Request $request){
        $this->TaxLawService->updateTaxLaw($request);
        return redirect()->back();
    }

    public function warranty(){
        $warranty = $this->WarrantyService->getWarranty();
        return view('admin.warranty',[
            'title'=>"Bảo hành",
            'detail'=>$warranty,
        ]);
    }

    public function updateWarranty(Request $request){
        $this->WarrantyService->updateWarranty($request);
        return redirect()->back();
    }

    public function representativeBroker(){
        $LegalRepresentative = $this->LegalRepresentativeService->getLegalRepresentative();
        return view('admin.representative-broker',[
            'title'=>"Đại lý môi giới",
            'detail'=>$LegalRepresentative,
        ]);
    }

    public function updateRepresentativeBroker(Request $request){
        $this->LegalRepresentativeService->updateLegalRepresentative($request);
        return redirect()->back();
    }

    public function employment(){
        $employment = $this->EmploymentService->getEmployment();
        return view('admin.employment',[
            'title'=>"Tuyển dụng",
            'detail'=>$employment,
        ]);
    }

    public function updateEmployment(Request $request){
        $this->EmploymentService->updateEmployment($request);
        return redirect()->back();
    }

    public function special(){
        $special = $this->SpecialService->getSpecial();
        return view('admin.special',[
            'title'=>"Khuyến mãi",
            'detail'=>$special,
        ]);
    }

    public function updateSpecial(Request $request){
        $this->SpecialService->updateSpecial($request);
        return redirect()->back();
    }

    public function products(){
        $product = $this->ProductService->getProduct();
        return view('admin.products',[
            'title'=>"Sản phẩm",
            'detail'=>$product,
        ]);
    }

    public function updateProducts(Request $request){
        $this->ProductService->updateProduct($request);
        return redirect()->back();
    }

    public function profile(){
        $profile = $this->ProfileService->getProfile();
        return view('admin.profile',[
            'title'=>"Hồ sơ",
            'detail'=>$profile,
        ]);
    }

    public function updateProfile(Request $request){
        $this->ProfileService->updateProfile($request);
        return redirect()->back();
    }

    public function questionsAnswers (){
        $QuestionAndAnswer = $this->QuestionAndAnswerService->getQuestionAndAnswer();
        return view('admin.questions-answers',[
            'title'=>"Câu hỏi và trả lời",
            'detail'=>$QuestionAndAnswer,
        ]);
    }

    public function updateQuestionsAnswers(Request $request){
        $this->QuestionAndAnswerService->updateQuestionAndAnswer($request);
        return redirect()->back();
    }

}

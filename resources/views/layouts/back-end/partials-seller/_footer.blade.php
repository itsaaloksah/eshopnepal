
<div class="footer">
    <div class="row justify-content-between align-items-center">
        <div class="col mt-3">
             <!--<span>{{\App\CPU\translate('Copyright')}} &copy; {{url('/')}} {{date('Y')}}</span>-->
             &copy; <span>{{\App\Model\BusinessSetting::where(['type'=>'company_copyright_text'])->first()->value}}</span>
        </div>
    </div>
</div>

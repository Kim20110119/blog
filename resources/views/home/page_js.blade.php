@section('page_js')
<!-- エリア検索ページ JavaScript -->
<script type="text/javascript" charset="utf-8">
    /**
     * 「医療施設検索画面」ボタン
     *
     * @description 医療施設検索画面へ遷移する
     */
    $('#facility').click(function () {
        $('#form_admin_facility_top').submit();
    });
    /**
     * 「受診者検索画面」ボタン
     *
     * @description 受診者検索画面へ遷移する
     */
    $('#examinee').click(function () {
        $('#form_examinee_top').submit();
    });
    /**
     * 「受診者検索画面」ボタン
     *
     * @description 受診者検索画面へ遷移する
     */
    $('#diagnosis').click(function () {
        $('#form_diagnosis_top').submit();
    });
</script>
@endsection
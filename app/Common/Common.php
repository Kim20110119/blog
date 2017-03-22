<?php

namespace App\Common;

use App\Category;
use DateTime;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use function public_path;
use function view;

class Common {

    const COMMA = ',';
    const COLON = ':';
    const SLASH = '/';
    const MINUS = '-';
    const SPACE = ' ';
    const IMAGE_H = 200;
    const IMAGE_W = 200;

    /**
     * 指定文字区切りデータを配列に入れる処理
     *
     * @param String $str_explode 区切り符号
     * @param String $str カンマ区切りデータ
     * @return array $str
     */
    public static function commonExplode($str_explode, $str) {
        return explode($str_explode, $str);
    }

    /**
     * カンマ区切りデータを配列に入れる処理
     *
     * @param String $str カンマ区切りデータ
     * @return array $str
     */
    public static function commaExplode($str) {
        return self::commonExplode(self::COMMA, $str);
    }

    /**
     * マイナス区切りデータを配列に入れる処理
     *
     * @param String $str マイナス区切りデータ
     * @return array $str
     */
    public static function minusExplode($str) {
        return self::commonExplode(self::MINUS, $str);
    }

    /**
     * コロン区切りデータを配列に入れる処理
     *
     * @param String $str コロン区切りデータ
     * @return array $str
     */
    public static function colonExplode($str) {
        return self::commonExplode(self::COLON, $str);
    }

    /**
     * スラッシュ区切りデータを配列に入れる処理
     *
     * @param String $str スラッシュ区切りデータ
     * @return array $str
     */
    public static function slashExplode($str) {
        return self::commonExplode(self::SLASH, $str);
    }

    /**
     * 登録日付を取得する
     *
     * @param String $create_date 登録時間
     * @return String $str
     */
    public static function getCreateDate($create_date) {
        $str_date = '';
        if ($create_date != '') {
            $str_date = self::commonExplode(self::SPACE, $create_date)[0];
        }
        return $str_date;
    }

    /**
     * DBからカテゴリ情報リストを取得する
     *
     * @return array $category_list
     */
    public static function getCategoryList() {
        $category_query = Category::query();
        $category_query->where('delete_flag', '=', 0);
        $category_query->orderBy('display_sort', 'asc');
        return $category_query->get();
    }

    /**
     * 指定配列をカンマにより連結する処理
     *
     * @param array $str_array 連結する配列
     * @return String $str
     */
    public static function arrayLinkingByComma($str_array) {
        $return_str = "";
        foreach ($str_array as $str) {
            if ($str != end($str_array)) {
                $return_str = $return_str . $str . self::COMMA;
            } else {
                $return_str = $return_str . $str;
            }
        }
        return $return_str;
    }

    /**
     * 新規登録する記事番号を取得する
     *
     * @param array $articles_number 既存最大記事番号
     * @return String $str
     */
    public static function getInsertArticlesNumber($articles_number) {
        $str = substr($articles_number, 0, 9);
        $number = substr($articles_number, 9, 8);
        $int_number = intval($number) + 1;
        return $str . str_pad(strval($int_number), 8, "0", STR_PAD_LEFT);
    }

    /**
     * 文字列年、月、日を[yyyy/MM/dd]形式に連結する
     *
     * @param String $year 年
     * @param String $month 月
     * @param String $day 日
     * @return array $str_date(yyyy/MM/dd)
     */
    public static function dateFormat($year, $month, $day) {
        return $year . self::SLASH . $month . self::SLASH . $day;
    }

    /**
     * 文字列電話番号を[00-0000-000]形式に連結する
     *
     * @param String $tel1
     * @param String $tel2
     * @param String $tel3
     * @return array $str_tel(00-0000-000)
     */
    public static function telFormat($tel1, $tel2, $tel3) {
        return $tel1 . self::MINUS . $tel2 . self::MINUS . $tel3;
    }

    /**
     * 文字列郵便番号を[000-0000]形式に連結する
     *
     * @param String $zip1
     * @param String $zip2
     * @return array $str_zip(000-0000)
     */
    public static function zipFormat($zip1, $zip2) {
        return $zip1 . self::MINUS . $zip2;
    }

    /**
     * 時間を[hh:mm]形式に連結する
     *
     * @param String $h
     * @param String $m
     * @return array $str_time(hh:mm)
     */
    public static function timeFormatByHHMM($h, $m) {
        $hh = '';
        $mm = '';
        if (strlen($h) < 2) {
            $hh = '0' . $h;
        } else {
            $hh = $h;
        }
        if (strlen($m) < 2) {
            $mm = '0' . $m;
        } else {
            $mm = $m;
        }
        return $hh . self::COLON . $mm;
    }

    /**
     * 生年月日から年齢を計算する処理
     *
     * @param String $ymd 年-月-日
     * @return int $age
     */
    public static function birthToAge($ymd) {

        $base = new DateTime();
        $today = $base->format('Ymd');

        $birth = new DateTime($ymd);
        $birthday = $birth->format('Ymd');

        $age = (int) (($today - $birthday) / 10000);

        return $age;
    }

    /**
     * 生年月日から年齢帯を計算する処理
     *
     * @param String $ymd 年-月-日
     * @return int $age
     */
    public static function birthToAgeGroup($ymd) {
        $age = floor(self::birthToAge($ymd) / 10) * 10;
        return $age;
    }

    /**
     * 改行符号を改行HTMLタグに変換する処理
     *
     * @param String $str カンマ区切りデータ
     * @return array $str
     */
    public static function brReplace($str) {
        $order = array("\r\n", "\n", "\r");
        $replace = '<br />';
        return str_replace($order, $replace, $str);
    }

    /**
     * 本文を指定した文字数により丸める処理
     *
     * @param String $str 丸める本文
     * @param String $length 文字数
     * @return String $str
     */
    public static function strRound($str, $length = 100) {
        if ($length != 0) {
            $str = mb_strimwidth($str, 0, $length, "[...]");
        }
        return $str;
    }

    /**
     * 「h:s」形式時間文字列を「h時s分」形式文字列にフォーマットする処理
     *
     * @param String $str 「h:s」形式時間文字列
     * @return String $str 「h時s分」形式文字列
     */
    public static function timeFormat($str) {
        if (!empty($str)) {
            return self::colonExplode($str)[0] . "時" . self::colonExplode($str)[1] . "分";
        } else {
            return $str;
        }
    }

    /**
     * 「yyyy-MM-dd」形式日付文字列を「yyyy年MM月dd日」形式文字列にフォーマットする処理
     *
     * @param String $str 「yyyy-MM-dd」形式日付文字列
     * @return String $str 「yyyy年MM月dd日」形式文字列
     */
    public static function dataFormatByYYYYMMDD($str) {
        list($year, $month, $day) = explode('-', $str);
        return $year . "年" . $month . "月" . $day . "日";
    }

    /**
     * 画像ファイルを一時アップロードする処理
     *
     * @param file $file アップロードする画像ファイル
     * @return view 画像ファイル名
     */
    public static function imageUploadTemp($file) {
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $fileName = 'main.' . self::commonExplode('.', $fileName)[1];
            $file->move(public_path('img/update/temp'), $fileName);
        }
        // さくらサーバーなら画像ディレクトリをコピーする
        if (strtoupper(substr(PHP_OS, 0, 3)) != 'WIN') {
            exec("cp -rf /home/kimyea/point/public/img /home/kimyea/www");
        }

        return $fileName;
    }

    /**
     * 一時画像ファイルを移動する処理
     * @param String $folder フォルダ名
     * @param String $number 番号
     */
    public static function moveImageFile($folder, $number, $fileName) {
        if (!file_exists(public_path('img/' . $folder . '/' . $number))) {
            mkdir(public_path('img/' . $folder . '/' . $number));
        }
        File::move(public_path('img/update/temp/' . $fileName), public_path('img/' . $folder . '/' . $number . '/' . $fileName));
        // さくらサーバーなら画像ディレクトリをコピーする
        if (strtoupper(substr(PHP_OS, 0, 3)) != 'WIN') {
            exec("cp -rf /home/kimyea/point/public/img /home/kimyea/www");
        }
    }

    /**
     * 画像ファイルをリサイズする処理
     * @param String $folder フォルダ名
     * @param String $number 番号
     */
    public static function resizeImageFile($folder, $number, $fileName) {
        mkdir(public_path('img/' . $folder . '/' . $number . '/resize'));
        Image::make(public_path('img/' . $folder . '/' . $number . '/' . $fileName))->resize(400, 250)->save(public_path('img/' . $folder . '/' . $number . '/resize/' . $fileName));
        // さくらサーバーなら画像ディレクトリをコピーする
        if (strtoupper(substr(PHP_OS, 0, 3)) != 'WIN') {
            exec("cp -rf /home/kimyea/point/public/img /home/kimyea/www");
        }
    }

    /**
     * 画像ファイルを削除する処理
     *
     * @param String $folder フォルダ名
     * @param String $number 番号
     */
    public static function deleteImageFile($folder, $number, $fileName) {
        File::deleteDirectory(public_path('img/' . $folder . '/' . $number . '/' . $fileName));
        // さくらサーバーなら画像ディレクトリをコピーする
        if (strtoupper(substr(PHP_OS, 0, 3)) != 'WIN') {
            exec("cp -rf /home/kimyea/point/public/img /home/kimyea/www");
        }
    }

}

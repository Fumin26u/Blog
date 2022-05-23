{
    // エディタへの設定を適用する
    CKEDITOR.replace('ckeditor', {
        uiColor: '#EEEEEE',
        height: 300,
        width: 1200,
        // エディタ内に適用するCSS
        // contentsCss: [
        //     "./css/sample.css",
        // ],
        toolbar_Custom: [
            'codesnippet',
            'widget',
            'lineutils',
            'dialog',
            'dialogui'
        ],
        // スペルチェック機能OFF
        scayt_autoStartup: false,
        // Enterを押した際に改行タグを挿入
        enterMode: CKEDITOR.ENTER_BR,
        // Shift+Enterを押した際に段落タグを挿入
        shiftEnterMode: CKEDITOR.ENTER_P,
        // idやclassを指定可能にする
        allowedContent: true,
        // ツールバーを下にする
        toolbarLocation: 'bottom',
        // preコード挿入時
        format_pre: { element: 'pre', attributes: { 'class': 'code' } },
        // タグのパンくずリストを削除
        removePlugins: 'elementspath',
        // webからコピペした際でもプレーンテキストを貼り付けるようにする
        forcePasteAsPlainText: true,
        // 自動で空白を挿入しないようにする
        fillEmptyBlocks: false,
        // タブの入力を無効にする
        tabSpaces: 0,
        // 画像アップロード関連
        filebrowserUploadUrl: "{{ route('ckeditor/images', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });
}

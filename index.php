<?php $titles = parse_ini_file("./titles.ini"); 
$title='Unknown Page';
if(array_key_exists($_GET['type'], $titles))
{
    $title=$titles[$_GET['type']];
}
?>

<!doctype html>
<html>
<head>
<meta charset='UTF-8'><meta name='viewport' content='width=device-width initial-scale=1'>
<title>Lite Wood工作室 - <?php echo $title;?></title>
<link href='https://fonts.loli.net/css?family=Open+Sans:400italic,700italic,700,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
<style>html{overflow-x:initial!important}:root{--bg-color:#ffffff;--text-color:#333333;--select-text-bg-color:#B5D6FC;--select-text-font-color:auto;--monospace:"Lucida Console",Consolas,"Courier",monospace;--title-bar-height:20px}.mac-os-11{--title-bar-height:28px}html{font-size:14px;background-color:var(--bg-color);color:var(--text-color);font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased}body{margin:0;padding:0;height:auto;bottom:0;top:0;left:0;right:0;font-size:1rem;line-height:1.42857;overflow-x:hidden;background:inherit;tab-size:4}iframe{margin:auto}a.url{word-break:break-all}a:active,a:hover{outline:0}.in-text-selection,::selection{text-shadow:none;background:var(--select-text-bg-color);color:var(--select-text-font-color)}#write{margin:0 auto;height:auto;width:inherit;word-break:normal;overflow-wrap:break-word;position:relative;white-space:normal;overflow-x:visible;padding-top:36px}#write.first-line-indent p{text-indent:2em}#write.first-line-indent li p,#write.first-line-indent p *{text-indent:0}#write.first-line-indent li{margin-left:2em}.for-image #write{padding-left:8px;padding-right:8px}body.typora-export{padding-left:30px;padding-right:30px}.typora-export .footnote-line,.typora-export li,.typora-export p{white-space:pre-wrap}.typora-export .task-list-item input{pointer-events:none}@media screen and (max-width:500px){body.typora-export{padding-left:0;padding-right:0}#write{padding-left:20px;padding-right:20px}.CodeMirror-sizer{margin-left:0!important}.CodeMirror-gutters{display:none!important}}#write li>figure:last-child{margin-bottom:.5rem}#write ol,#write ul{position:relative}img{max-width:100%;vertical-align:middle;image-orientation:from-image}button,input,select,textarea{color:inherit;font:inherit}input[type=checkbox],input[type=radio]{line-height:normal;padding:0}*,::after,::before{box-sizing:border-box}#write h1,#write h2,#write h3,#write h4,#write h5,#write h6,#write p,#write pre{width:inherit}#write h1,#write h2,#write h3,#write h4,#write h5,#write h6,#write p{position:relative}p{line-height:inherit}h1,h2,h3,h4,h5,h6{break-after:avoid-page;break-inside:avoid;orphans:4}p{orphans:4}h1{font-size:2rem}h2{font-size:1.8rem}h3{font-size:1.6rem}h4{font-size:1.4rem}h5{font-size:1.2rem}h6{font-size:1rem}.md-math-block,.md-rawblock,h1,h2,h3,h4,h5,h6,p{margin-top:1rem;margin-bottom:1rem}.hidden{display:none}.md-blockmeta{color:#ccc;font-weight:700;font-style:italic}a{cursor:pointer}sup.md-footnote{padding:2px 4px;background-color:rgba(238,238,238,.7);color:#555;border-radius:4px;cursor:pointer}sup.md-footnote a,sup.md-footnote a:hover{color:inherit;text-transform:inherit;text-decoration:inherit}#write input[type=checkbox]{cursor:pointer;width:inherit;height:inherit}figure{overflow-x:auto;margin:1.2em 0;max-width:calc(100% + 16px);padding:0}figure>table{margin:0}tr{break-inside:avoid;break-after:auto}thead{display:table-header-group}table{border-collapse:collapse;border-spacing:0;width:100%;overflow:auto;break-inside:auto;text-align:left}table.md-table td{min-width:32px}.CodeMirror-gutters{border-right:0;background-color:inherit}.CodeMirror-linenumber{user-select:none}.CodeMirror{text-align:left}.CodeMirror-placeholder{opacity:.3}.CodeMirror pre{padding:0 4px}.CodeMirror-lines{padding:0}div.hr:focus{cursor:none}#write pre{white-space:pre-wrap}#write.fences-no-line-wrapping pre{white-space:pre}#write pre.ty-contain-cm{white-space:normal}.CodeMirror-gutters{margin-right:4px}.md-fences{font-size:.9rem;display:block;break-inside:avoid;text-align:left;overflow:visible;white-space:pre;background:inherit;position:relative!important}.md-diagram-panel{width:100%;margin-top:10px;text-align:center;padding-top:0;padding-bottom:8px;overflow-x:auto}#write .md-fences.mock-cm{white-space:pre-wrap}.md-fences.md-fences-with-lineno{padding-left:0}#write.fences-no-line-wrapping .md-fences.mock-cm{white-space:pre;overflow-x:auto}.md-fences.mock-cm.md-fences-with-lineno{padding-left:8px}.CodeMirror-line,twitterwidget{break-inside:avoid}.footnotes{opacity:.8;font-size:.9rem;margin-top:1em;margin-bottom:1em}.footnotes+.footnotes{margin-top:0}.md-reset{margin:0;padding:0;border:0;outline:0;vertical-align:top;background:0 0;text-decoration:none;text-shadow:none;float:none;position:static;width:auto;height:auto;white-space:nowrap;cursor:inherit;-webkit-tap-highlight-color:transparent;line-height:normal;font-weight:400;text-align:left;box-sizing:content-box;direction:ltr}li div{padding-top:0}blockquote{margin:1rem 0}li .mathjax-block,li p{margin:.5rem 0}li blockquote{margin:1rem 0}li{margin:0;position:relative}blockquote>:last-child{margin-bottom:0}blockquote>:first-child,li>:first-child{margin-top:0}.footnotes-area{color:#888;margin-top:.714rem;padding-bottom:.143rem;white-space:normal}#write .footnote-line{white-space:pre-wrap}@media print{body,html{border:1px solid transparent;height:99%;break-after:avoid;break-before:avoid;font-variant-ligatures:no-common-ligatures}#write{margin-top:0;padding-top:0;border-color:transparent!important}.typora-export *{-webkit-print-color-adjust:exact}.typora-export #write{break-after:avoid}.typora-export #write::after{height:0}.is-mac table{break-inside:avoid}}.footnote-line{margin-top:.714em;font-size:.7em}a img,img a{cursor:pointer}pre.md-meta-block{font-size:.8rem;min-height:.8rem;white-space:pre-wrap;background:#ccc;display:block;overflow-x:hidden}p>.md-image:only-child:not(.md-img-error) img,p>img:only-child{display:block;margin:auto}#write.first-line-indent p>.md-image:only-child:not(.md-img-error) img{left:-2em;position:relative}p>.md-image:only-child{display:inline-block;width:100%}#write .MathJax_Display{margin:.8em 0 0}.md-math-block{width:100%}.md-math-block:not(:empty)::after{display:none}.MathJax_ref{fill:currentcolor}[contenteditable=false]:active,[contenteditable=false]:focus,[contenteditable=true]:active,[contenteditable=true]:focus{outline:0;box-shadow:none}.md-task-list-item{position:relative;list-style-type:none}.task-list-item.md-task-list-item{padding-left:0}.md-task-list-item>input{position:absolute;top:0;left:0;margin-left:-1.2em;margin-top:calc(1em - 10px);border:none}.math{font-size:1rem}.md-toc{min-height:3.58rem;position:relative;font-size:.9rem;border-radius:10px}.md-toc-content{position:relative;margin-left:0}.md-toc-content::after,.md-toc::after{display:none}.md-toc-item{display:block;color:#4183c4}.md-toc-item a{text-decoration:none}.md-toc-inner:hover{text-decoration:underline}.md-toc-inner{display:inline-block;cursor:pointer}.md-toc-h1 .md-toc-inner{margin-left:0;font-weight:700}.md-toc-h2 .md-toc-inner{margin-left:2em}.md-toc-h3 .md-toc-inner{margin-left:4em}.md-toc-h4 .md-toc-inner{margin-left:6em}.md-toc-h5 .md-toc-inner{margin-left:8em}.md-toc-h6 .md-toc-inner{margin-left:10em}@media screen and (max-width:48em){.md-toc-h3 .md-toc-inner{margin-left:3.5em}.md-toc-h4 .md-toc-inner{margin-left:5em}.md-toc-h5 .md-toc-inner{margin-left:6.5em}.md-toc-h6 .md-toc-inner{margin-left:8em}}a.md-toc-inner{font-size:inherit;font-style:inherit;font-weight:inherit;line-height:inherit}.footnote-line a:not(.reversefootnote){color:inherit}.md-attr{display:none}.md-fn-count::after{content:"."}code,pre,samp,tt{font-family:var(--monospace)}kbd{margin:0 .1em;padding:.1em .6em;font-size:.8em;color:#242729;background:#fff;border:1px solid #adb3b9;border-radius:3px;box-shadow:rgba(12,13,14,.2) 0 1px 0,#fff 0 0 0 2px inset;white-space:nowrap;vertical-align:middle}.md-comment{color:#a27f03;opacity:.8;font-family:var(--monospace)}code{text-align:left;vertical-align:initial}a.md-print-anchor{white-space:pre!important;border-width:initial!important;border-style:none!important;border-color:initial!important;display:inline-block!important;position:absolute!important;width:1px!important;right:0!important;outline:0!important;background:0 0!important;text-decoration:initial!important;text-shadow:initial!important}.md-inline-math .MathJax_SVG .noError{display:none!important}.html-for-mac .inline-math-svg .MathJax_SVG{vertical-align:.2px}.md-math-block .MathJax_SVG_Display{text-align:center;margin:0;position:relative;text-indent:0;max-width:none;max-height:none;min-height:0;min-width:100%;width:auto;overflow-y:hidden;display:block!important}.MathJax_SVG_Display,.md-inline-math .MathJax_SVG_Display{width:auto;margin:inherit;display:inline-block!important}.MathJax_SVG .MJX-monospace{font-family:var(--monospace)}.MathJax_SVG .MJX-sans-serif{font-family:sans-serif}.MathJax_SVG{display:inline;font-style:normal;font-weight:400;line-height:normal;zoom:90%;text-indent:0;text-align:left;text-transform:none;letter-spacing:normal;word-spacing:normal;overflow-wrap:normal;white-space:nowrap;float:none;direction:ltr;max-width:none;max-height:none;min-width:0;min-height:0;border:0;padding:0;margin:0}.MathJax_SVG *{transition:none 0s ease 0s}.MathJax_SVG_Display svg{vertical-align:middle!important;margin-bottom:0!important;margin-top:0!important}.os-windows.monocolor-emoji .md-emoji{font-family:"Segoe UI Symbol",sans-serif}.md-diagram-panel>svg{max-width:100%}[lang=flow] svg,[lang=mermaid] svg{max-width:100%;height:auto}[lang=mermaid] .node text{font-size:1rem}table tr th{border-bottom:0}video{max-width:100%;display:block;margin:0 auto}iframe{max-width:100%;width:100%;border:none}.highlight td,.highlight tr{border:0}mark{background:#ff0;color:#000}.md-html-inline .md-plain,.md-html-inline strong,mark .md-inline-math,mark strong{color:inherit}mark .md-meta{color:#000;opacity:.3!important}@media print{.typora-export h1,.typora-export h2,.typora-export h3,.typora-export h4,.typora-export h5,.typora-export h6{break-inside:avoid}}.md-diagram-panel .messageText{stroke:none!important}.md-diagram-panel .start-state{fill:var(--node-fill)}.md-diagram-panel .edgeLabel rect{opacity:1!important}.md-require-zoom-fix foreignobject{font-size:var(--mermaid-font-zoom)}:root{--side-bar-bg-color:#fafafa;--control-text-color:#777}@include-when-export url(https://fonts.loli.net/css?family=Open+Sans:400italic,700italic,700,400&subset=latin,latin-ext);html{font-size:16px}body{font-family:"Open Sans","Clear Sans","Helvetica Neue",Helvetica,Arial,sans-serif;color:#333;line-height:1.6}#write{max-width:860px;margin:0 auto;padding:30px;padding-bottom:100px}@media only screen and (min-width:1400px){#write{max-width:1024px}}@media only screen and (min-width:1800px){#write{max-width:1200px}}#write>ol:first-child,#write>ul:first-child{margin-top:30px}a{color:#4183c4}h1,h2,h3,h4,h5,h6{position:relative;margin-top:1rem;margin-bottom:1rem;font-weight:700;line-height:1.4;cursor:text}h1:hover a.anchor,h2:hover a.anchor,h3:hover a.anchor,h4:hover a.anchor,h5:hover a.anchor,h6:hover a.anchor{text-decoration:none}h1 code,h1 tt{font-size:inherit}h2 code,h2 tt{font-size:inherit}h3 code,h3 tt{font-size:inherit}h4 code,h4 tt{font-size:inherit}h5 code,h5 tt{font-size:inherit}h6 code,h6 tt{font-size:inherit}h1{font-size:2.25em;line-height:1.2;border-bottom:1px solid #eee}h2{font-size:1.75em;line-height:1.225;border-bottom:1px solid #eee}h3{font-size:1.5em;line-height:1.43}h4{font-size:1.25em}h5{font-size:1em}h6{font-size:1em;color:#777}blockquote,dl,ol,p,table,ul{margin:.8em 0}li>ol,li>ul{margin:0 0}hr{height:2px;padding:0;margin:16px 0;background-color:#e7e7e7;border:0 none;overflow:hidden;box-sizing:content-box}li p.first{display:inline-block}ol,ul{padding-left:30px}ol:first-child,ul:first-child{margin-top:0}ol:last-child,ul:last-child{margin-bottom:0}blockquote{border-left:4px solid #dfe2e5;padding:0 15px;color:#777}blockquote blockquote{padding-right:0}table{padding:0;word-break:initial}table tr{border-top:1px solid #dfe2e5;margin:0;padding:0}table tr:nth-child(2n),thead{background-color:#f8f8f8}table th{font-weight:700;border:1px solid #dfe2e5;border-bottom:0;margin:0;padding:6px 13px}table td{border:1px solid #dfe2e5;margin:0;padding:6px 13px}table td:first-child,table th:first-child{margin-top:0}table td:last-child,table th:last-child{margin-bottom:0}.CodeMirror-lines{padding-left:4px}.code-tooltip{box-shadow:0 1px 1px 0 rgba(0,28,36,.3);border-top:1px solid #eef2f2}.md-fences,code,tt{border:1px solid #e7eaed;background-color:#f8f8f8;border-radius:3px;padding:0;padding:2px 4px 0 4px;font-size:.9em}code{background-color:#f3f4f4;padding:0 2px 0 2px}.md-fences{margin-bottom:15px;margin-top:15px;padding-top:8px;padding-bottom:6px}.md-task-list-item>input{margin-left:-1.3em}@media print{html{font-size:13px}pre,table{page-break-inside:avoid}pre{word-wrap:break-word}}.md-fences{background-color:#f8f8f8}#write pre.md-meta-block{padding:1rem;font-size:85%;line-height:1.45;background-color:#f7f7f7;border:0;border-radius:3px;color:#777;margin-top:0!important}.mathjax-block>.code-tooltip{bottom:.375rem}.md-mathjax-midline{background:#fafafa}#write>h3.md-focus:before{left:-1.5625rem;top:.375rem}#write>h4.md-focus:before{left:-1.5625rem;top:.285714286rem}#write>h5.md-focus:before{left:-1.5625rem;top:.285714286rem}#write>h6.md-focus:before{left:-1.5625rem;top:.285714286rem}.md-image>.md-meta{border-radius:3px;padding:2px 0 0 4px;font-size:.9em;color:inherit}.md-tag{color:#a7a7a7;opacity:1}.md-toc{margin-top:20px;padding-bottom:20px}.sidebar-tabs{border-bottom:none}#typora-quick-open{border:1px solid #ddd;background-color:#f8f8f8}#typora-quick-open-item{background-color:#fafafa;border-color:#fefefe #e5e5e5 #e5e5e5 #eee;border-style:solid;border-width:1px}.on-focus-mode blockquote{border-left-color:rgba(85,85,85,.12)}.context-menu,.megamenu-content,footer,header{font-family:"Segoe UI",Arial,sans-serif}.file-node-content:hover .file-node-icon,.file-node-content:hover .file-node-open-state{visibility:visible}.mac-seamless-mode #typora-sidebar{background-color:#fafafa;background-color:var(--side-bar-bg-color)}.md-lang{color:#b4654d}.html-for-mac .context-menu{--item-hover-bg-color:#E6F0FE}#md-notification .btn{border:0}.dropdown-menu .divider{border-color:#e5e5e5}.ty-preferences .window-content{background-color:#fafafa}.ty-preferences .nav-group-item.active{color:#fff;background:#999} </style>
<link rel="icon" href="https://cdn.jsdelivr.net/gh/ImJingLan/WebImage@1.0/img/favicon.png"></head>
<body><div id="write">

<?php
class markdown
{

    function text($text)
    {
        # make sure no definitions are set
        $this->DefinitionData = array();

        # standardize line breaks
        $text = str_replace(array("\r\n", "\r"), "\n", $text);

        # remove surrounding line breaks
        $text = trim($text, "\n");

        # split text into lines
        $lines = explode("\n", $text);

        # iterate through lines to identify blocks
        $markup = $this->lines($lines);

        # trim line breaks
        $markup = trim($markup, "\n");

        return $markup;
    }

    #
    # Setters
    #

    function setBreaksEnabled($breaksEnabled)
    {
        $this->breaksEnabled = $breaksEnabled;

        return $this;
    }

    protected $breaksEnabled;

    function setMarkupEscaped($markupEscaped)
    {
        $this->markupEscaped = $markupEscaped;

        return $this;
    }

    protected $markupEscaped;

    function setUrlsLinked($urlsLinked)
    {
        $this->urlsLinked = $urlsLinked;

        return $this;
    }

    protected $urlsLinked = true;

    function setSafeMode($safeMode)
    {
        $this->safeMode = (bool) $safeMode;

        return $this;
    }

    protected $safeMode;

    protected $safeLinksWhitelist = array(
        'http://',
        'https://',
        'ftp://',
        'ftps://',
        'mailto:',
        'data:image/png;base64,',
        'data:image/gif;base64,',
        'data:image/jpeg;base64,',
        'irc:',
        'ircs:',
        'git:',
        'ssh:',
        'news:',
        'steam:',
    );

    #
    # Lines
    #

    protected $BlockTypes = array(
        '#' => array('Header'),
        '*' => array('Rule', 'List'),
        '+' => array('List'),
        '-' => array('SetextHeader', 'Table', 'Rule', 'List'),
        '0' => array('List'),
        '1' => array('List'),
        '2' => array('List'),
        '3' => array('List'),
        '4' => array('List'),
        '5' => array('List'),
        '6' => array('List'),
        '7' => array('List'),
        '8' => array('List'),
        '9' => array('List'),
        ':' => array('Table'),
        '<' => array('Comment', 'Markup'),
        '=' => array('SetextHeader'),
        '>' => array('Quote'),
        '[' => array('Reference'),
        '_' => array('Rule'),
        '`' => array('FencedCode'),
        '|' => array('Table'),
        '~' => array('FencedCode'),
    );

    # ~

    protected $unmarkedBlockTypes = array(
        'Code',
    );

    #
    # Blocks
    #

    protected function lines(array $lines)
    {
        $CurrentBlock = null;

        foreach ($lines as $line)
        {
            if (chop($line) === '')
            {
                if (isset($CurrentBlock))
                {
                    $CurrentBlock['interrupted'] = true;
                }

                continue;
            }

            if (strpos($line, "\t") !== false)
            {
                $parts = explode("\t", $line);

                $line = $parts[0];

                unset($parts[0]);

                foreach ($parts as $part)
                {
                    $shortage = 4 - mb_strlen($line, 'utf-8') % 4;

                    $line .= str_repeat(' ', $shortage);
                    $line .= $part;
                }
            }

            $indent = 0;

            while (isset($line[$indent]) and $line[$indent] === ' ')
            {
                $indent ++;
            }

            $text = $indent > 0 ? substr($line, $indent) : $line;

            # ~

            $Line = array('body' => $line, 'indent' => $indent, 'text' => $text);

            # ~

            if (isset($CurrentBlock['continuable']))
            {
                $Block = $this->{'block'.$CurrentBlock['type'].'Continue'}($Line, $CurrentBlock);

                if (isset($Block))
                {
                    $CurrentBlock = $Block;

                    continue;
                }
                else
                {
                    if ($this->isBlockCompletable($CurrentBlock['type']))
                    {
                        $CurrentBlock = $this->{'block'.$CurrentBlock['type'].'Complete'}($CurrentBlock);
                    }
                }
            }

            # ~

            $marker = $text[0];

            # ~

            $blockTypes = $this->unmarkedBlockTypes;

            if (isset($this->BlockTypes[$marker]))
            {
                foreach ($this->BlockTypes[$marker] as $blockType)
                {
                    $blockTypes []= $blockType;
                }
            }

            #
            # ~

            foreach ($blockTypes as $blockType)
            {
                $Block = $this->{'block'.$blockType}($Line, $CurrentBlock);

                if (isset($Block))
                {
                    $Block['type'] = $blockType;

                    if ( ! isset($Block['identified']))
                    {
                        $Blocks []= $CurrentBlock;

                        $Block['identified'] = true;
                    }

                    if ($this->isBlockContinuable($blockType))
                    {
                        $Block['continuable'] = true;
                    }

                    $CurrentBlock = $Block;

                    continue 2;
                }
            }

            # ~

            if (isset($CurrentBlock) and ! isset($CurrentBlock['type']) and ! isset($CurrentBlock['interrupted']))
            {
                $CurrentBlock['element']['text'] .= "\n".$text;
            }
            else
            {
                $Blocks []= $CurrentBlock;

                $CurrentBlock = $this->paragraph($Line);

                $CurrentBlock['identified'] = true;
            }
        }

        # ~

        if (isset($CurrentBlock['continuable']) and $this->isBlockCompletable($CurrentBlock['type']))
        {
            $CurrentBlock = $this->{'block'.$CurrentBlock['type'].'Complete'}($CurrentBlock);
        }

        # ~

        $Blocks []= $CurrentBlock;

        unset($Blocks[0]);

        # ~

        $markup = '';

        foreach ($Blocks as $Block)
        {
            if (isset($Block['hidden']))
            {
                continue;
            }

            $markup .= "\n";
            $markup .= isset($Block['markup']) ? $Block['markup'] : $this->element($Block['element']);
        }

        $markup .= "\n";

        # ~

        return $markup;
    }

    protected function isBlockContinuable($Type)
    {
        return method_exists($this, 'block'.$Type.'Continue');
    }

    protected function isBlockCompletable($Type)
    {
        return method_exists($this, 'block'.$Type.'Complete');
    }

    #
    # Code

    protected function blockCode($Line, $Block = null)
    {
        if (isset($Block) and ! isset($Block['type']) and ! isset($Block['interrupted']))
        {
            return;
        }

        if ($Line['indent'] >= 4)
        {
            $text = substr($Line['body'], 4);

            $Block = array(
                'element' => array(
                    'name' => 'pre',
                    'handler' => 'element',
                    'text' => array(
                        'name' => 'code',
                        'text' => $text,
                    ),
                ),
            );

            return $Block;
        }
    }

    protected function blockCodeContinue($Line, $Block)
    {
        if ($Line['indent'] >= 4)
        {
            if (isset($Block['interrupted']))
            {
                $Block['element']['text']['text'] .= "\n";

                unset($Block['interrupted']);
            }

            $Block['element']['text']['text'] .= "\n";

            $text = substr($Line['body'], 4);

            $Block['element']['text']['text'] .= $text;

            return $Block;
        }
    }

    protected function blockCodeComplete($Block)
    {
        $text = $Block['element']['text']['text'];

        $Block['element']['text']['text'] = $text;

        return $Block;
    }

    #
    # Comment

    protected function blockComment($Line)
    {
        if ($this->markupEscaped or $this->safeMode)
        {
            return;
        }

        if (isset($Line['text'][3]) and $Line['text'][3] === '-' and $Line['text'][2] === '-' and $Line['text'][1] === '!')
        {
            $Block = array(
                'markup' => $Line['body'],
            );

            if (preg_match('/-->$/', $Line['text']))
            {
                $Block['closed'] = true;
            }

            return $Block;
        }
    }

    protected function blockCommentContinue($Line, array $Block)
    {
        if (isset($Block['closed']))
        {
            return;
        }

        $Block['markup'] .= "\n" . $Line['body'];

        if (preg_match('/-->$/', $Line['text']))
        {
            $Block['closed'] = true;
        }

        return $Block;
    }

    #
    # Fenced Code

    protected function blockFencedCode($Line)
    {
        if (preg_match('/^['.$Line['text'][0].']{3,}[ ]*([^`]+)?[ ]*$/', $Line['text'], $matches))
        {
            $Element = array(
                'name' => 'code',
                'text' => '',
            );

            if (isset($matches[1]))
            {
                /**
                 * https://www.w3.org/TR/2011/WD-html5-20110525/elements.html#classes
                 * Every HTML element may have a class attribute specified.
                 * The attribute, if specified, must have a value that is a set
                 * of space-separated tokens representing the various classes
                 * that the element belongs to.
                 * [...]
                 * The space characters, for the purposes of this specification,
                 * are U+0020 SPACE, U+0009 CHARACTER TABULATION (tab),
                 * U+000A LINE FEED (LF), U+000C FORM FEED (FF), and
                 * U+000D CARRIAGE RETURN (CR).
                 */
                $language = substr($matches[1], 0, strcspn($matches[1], " \t\n\f\r"));

                $class = 'language-'.$language;

                $Element['attributes'] = array(
                    'class' => $class,
                );
            }

            $Block = array(
                'char' => $Line['text'][0],
                'element' => array(
                    'name' => 'pre',
                    'handler' => 'element',
                    'text' => $Element,
                ),
            );

            return $Block;
        }
    }

    protected function blockFencedCodeContinue($Line, $Block)
    {
        if (isset($Block['complete']))
        {
            return;
        }

        if (isset($Block['interrupted']))
        {
            $Block['element']['text']['text'] .= "\n";

            unset($Block['interrupted']);
        }

        if (preg_match('/^'.$Block['char'].'{3,}[ ]*$/', $Line['text']))
        {
            $Block['element']['text']['text'] = substr($Block['element']['text']['text'], 1);

            $Block['complete'] = true;

            return $Block;
        }

        $Block['element']['text']['text'] .= "\n".$Line['body'];

        return $Block;
    }

    protected function blockFencedCodeComplete($Block)
    {
        $text = $Block['element']['text']['text'];

        $Block['element']['text']['text'] = $text;

        return $Block;
    }

    #
    # Header

    protected function blockHeader($Line)
    {
        if (isset($Line['text'][1]))
        {
            $level = 1;

            while (isset($Line['text'][$level]) and $Line['text'][$level] === '#')
            {
                $level ++;
            }

            if ($level > 6)
            {
                return;
            }

            $text = trim($Line['text'], '# ');

            $Block = array(
                'element' => array(
                    'name' => 'h' . min(6, $level),
                    'text' => $text,
                    'handler' => 'line',
                ),
            );

            return $Block;
        }
    }

    #
    # List

    protected function blockList($Line)
    {
        list($name, $pattern) = $Line['text'][0] <= '-' ? array('ul', '[*+-]') : array('ol', '[0-9]+[.]');

        if (preg_match('/^('.$pattern.'[ ]+)(.*)/', $Line['text'], $matches))
        {
            $Block = array(
                'indent' => $Line['indent'],
                'pattern' => $pattern,
                'element' => array(
                    'name' => $name,
                    'handler' => 'elements',
                ),
            );

            if($name === 'ol')
            {
                $listStart = stristr($matches[0], '.', true);

                if($listStart !== '1')
                {
                    $Block['element']['attributes'] = array('start' => $listStart);
                }
            }

            $Block['li'] = array(
                'name' => 'li',
                'handler' => 'li',
                'text' => array(
                    $matches[2],
                ),
            );

            $Block['element']['text'] []= & $Block['li'];

            return $Block;
        }
    }

    protected function blockListContinue($Line, array $Block)
    {
        if ($Block['indent'] === $Line['indent'] and preg_match('/^'.$Block['pattern'].'(?:[ ]+(.*)|$)/', $Line['text'], $matches))
        {
            if (isset($Block['interrupted']))
            {
                $Block['li']['text'] []= '';

                $Block['loose'] = true;

                unset($Block['interrupted']);
            }

            unset($Block['li']);

            $text = isset($matches[1]) ? $matches[1] : '';

            $Block['li'] = array(
                'name' => 'li',
                'handler' => 'li',
                'text' => array(
                    $text,
                ),
            );

            $Block['element']['text'] []= & $Block['li'];

            return $Block;
        }

        if ($Line['text'][0] === '[' and $this->blockReference($Line))
        {
            return $Block;
        }

        if ( ! isset($Block['interrupted']))
        {
            $text = preg_replace('/^[ ]{0,4}/', '', $Line['body']);

            $Block['li']['text'] []= $text;

            return $Block;
        }

        if ($Line['indent'] > 0)
        {
            $Block['li']['text'] []= '';

            $text = preg_replace('/^[ ]{0,4}/', '', $Line['body']);

            $Block['li']['text'] []= $text;

            unset($Block['interrupted']);

            return $Block;
        }
    }

    protected function blockListComplete(array $Block)
    {
        if (isset($Block['loose']))
        {
            foreach ($Block['element']['text'] as &$li)
            {
                if (end($li['text']) !== '')
                {
                    $li['text'] []= '';
                }
            }
        }

        return $Block;
    }

    #
    # Quote

    protected function blockQuote($Line)
    {
        if (preg_match('/^>[ ]?(.*)/', $Line['text'], $matches))
        {
            $Block = array(
                'element' => array(
                    'name' => 'blockquote',
                    'handler' => 'lines',
                    'text' => (array) $matches[1],
                ),
            );

            return $Block;
        }
    }

    protected function blockQuoteContinue($Line, array $Block)
    {
        if ($Line['text'][0] === '>' and preg_match('/^>[ ]?(.*)/', $Line['text'], $matches))
        {
            if (isset($Block['interrupted']))
            {
                $Block['element']['text'] []= '';

                unset($Block['interrupted']);
            }

            $Block['element']['text'] []= $matches[1];

            return $Block;
        }

        if ( ! isset($Block['interrupted']))
        {
            $Block['element']['text'] []= $Line['text'];

            return $Block;
        }
    }

    #
    # Rule

    protected function blockRule($Line)
    {
        if (preg_match('/^(['.$Line['text'][0].'])([ ]*\1){2,}[ ]*$/', $Line['text']))
        {
            $Block = array(
                'element' => array(
                    'name' => 'hr'
                ),
            );

            return $Block;
        }
    }

    #
    # Setext

    protected function blockSetextHeader($Line, array $Block = null)
    {
        if ( ! isset($Block) or isset($Block['type']) or isset($Block['interrupted']))
        {
            return;
        }

        if (chop($Line['text'], $Line['text'][0]) === '')
        {
            $Block['element']['name'] = $Line['text'][0] === '=' ? 'h1' : 'h2';

            return $Block;
        }
    }

    #
    # Markup

    protected function blockMarkup($Line)
    {
        if ($this->markupEscaped or $this->safeMode)
        {
            return;
        }

        if (preg_match('/^<(\w[\w-]*)(?:[ ]*'.$this->regexHtmlAttribute.')*[ ]*(\/)?>/', $Line['text'], $matches))
        {
            $element = strtolower($matches[1]);

            if (in_array($element, $this->textLevelElements))
            {
                return;
            }

            $Block = array(
                'name' => $matches[1],
                'depth' => 0,
                'markup' => $Line['text'],
            );

            $length = strlen($matches[0]);

            $remainder = substr($Line['text'], $length);

            if (trim($remainder) === '')
            {
                if (isset($matches[2]) or in_array($matches[1], $this->voidElements))
                {
                    $Block['closed'] = true;

                    $Block['void'] = true;
                }
            }
            else
            {
                if (isset($matches[2]) or in_array($matches[1], $this->voidElements))
                {
                    return;
                }

                if (preg_match('/<\/'.$matches[1].'>[ ]*$/i', $remainder))
                {
                    $Block['closed'] = true;
                }
            }

            return $Block;
        }
    }

    protected function blockMarkupContinue($Line, array $Block)
    {
        if (isset($Block['closed']))
        {
            return;
        }

        if (preg_match('/^<'.$Block['name'].'(?:[ ]*'.$this->regexHtmlAttribute.')*[ ]*>/i', $Line['text'])) # open
        {
            $Block['depth'] ++;
        }

        if (preg_match('/(.*?)<\/'.$Block['name'].'>[ ]*$/i', $Line['text'], $matches)) # close
        {
            if ($Block['depth'] > 0)
            {
                $Block['depth'] --;
            }
            else
            {
                $Block['closed'] = true;
            }
        }

        if (isset($Block['interrupted']))
        {
            $Block['markup'] .= "\n";

            unset($Block['interrupted']);
        }

        $Block['markup'] .= "\n".$Line['body'];

        return $Block;
    }

    #
    # Reference

    protected function blockReference($Line)
    {
        if (preg_match('/^\[(.+?)\]:[ ]*<?(\S+?)>?(?:[ ]+["\'(](.+)["\')])?[ ]*$/', $Line['text'], $matches))
        {
            $id = strtolower($matches[1]);

            $Data = array(
                'url' => $matches[2],
                'title' => null,
            );

            if (isset($matches[3]))
            {
                $Data['title'] = $matches[3];
            }

            $this->DefinitionData['Reference'][$id] = $Data;

            $Block = array(
                'hidden' => true,
            );

            return $Block;
        }
    }

    #
    # Table

    protected function blockTable($Line, array $Block = null)
    {
        if ( ! isset($Block) or isset($Block['type']) or isset($Block['interrupted']))
        {
            return;
        }

        if (strpos($Block['element']['text'], '|') !== false and chop($Line['text'], ' -:|') === '')
        {
            $alignments = array();

            $divider = $Line['text'];

            $divider = trim($divider);
            $divider = trim($divider, '|');

            $dividerCells = explode('|', $divider);

            foreach ($dividerCells as $dividerCell)
            {
                $dividerCell = trim($dividerCell);

                if ($dividerCell === '')
                {
                    continue;
                }

                $alignment = null;

                if ($dividerCell[0] === ':')
                {
                    $alignment = 'left';
                }

                if (substr($dividerCell, - 1) === ':')
                {
                    $alignment = $alignment === 'left' ? 'center' : 'right';
                }

                $alignments []= $alignment;
            }

            # ~

            $HeaderElements = array();

            $header = $Block['element']['text'];

            $header = trim($header);
            $header = trim($header, '|');

            $headerCells = explode('|', $header);

            foreach ($headerCells as $index => $headerCell)
            {
                $headerCell = trim($headerCell);

                $HeaderElement = array(
                    'name' => 'th',
                    'text' => $headerCell,
                    'handler' => 'line',
                );

                if (isset($alignments[$index]))
                {
                    $alignment = $alignments[$index];

                    $HeaderElement['attributes'] = array(
                        'style' => 'text-align: '.$alignment.';',
                    );
                }

                $HeaderElements []= $HeaderElement;
            }

            # ~

            $Block = array(
                'alignments' => $alignments,
                'identified' => true,
                'element' => array(
                    'name' => 'table',
                    'handler' => 'elements',
                ),
            );

            $Block['element']['text'] []= array(
                'name' => 'thead',
                'handler' => 'elements',
            );

            $Block['element']['text'] []= array(
                'name' => 'tbody',
                'handler' => 'elements',
                'text' => array(),
            );

            $Block['element']['text'][0]['text'] []= array(
                'name' => 'tr',
                'handler' => 'elements',
                'text' => $HeaderElements,
            );

            return $Block;
        }
    }

    protected function blockTableContinue($Line, array $Block)
    {
        if (isset($Block['interrupted']))
        {
            return;
        }

        if ($Line['text'][0] === '|' or strpos($Line['text'], '|'))
        {
            $Elements = array();

            $row = $Line['text'];

            $row = trim($row);
            $row = trim($row, '|');

            preg_match_all('/(?:(\\\\[|])|[^|`]|`[^`]+`|`)+/', $row, $matches);

            foreach ($matches[0] as $index => $cell)
            {
                $cell = trim($cell);

                $Element = array(
                    'name' => 'td',
                    'handler' => 'line',
                    'text' => $cell,
                );

                if (isset($Block['alignments'][$index]))
                {
                    $Element['attributes'] = array(
                        'style' => 'text-align: '.$Block['alignments'][$index].';',
                    );
                }

                $Elements []= $Element;
            }

            $Element = array(
                'name' => 'tr',
                'handler' => 'elements',
                'text' => $Elements,
            );

            $Block['element']['text'][1]['text'] []= $Element;

            return $Block;
        }
    }

    #
    # ~
    #

    protected function paragraph($Line)
    {
        $Block = array(
            'element' => array(
                'name' => 'p',
                'text' => $Line['text'],
                'handler' => 'line',
            ),
        );

        return $Block;
    }

    #
    # Inline Elements
    #

    protected $InlineTypes = array(
        '"' => array('SpecialCharacter'),
        '!' => array('Image'),
        '&' => array('SpecialCharacter'),
        '*' => array('Emphasis'),
        ':' => array('Url'),
        '<' => array('UrlTag', 'EmailTag', 'Markup', 'SpecialCharacter'),
        '>' => array('SpecialCharacter'),
        '[' => array('Link'),
        '_' => array('Emphasis'),
        '`' => array('Code'),
        '~' => array('Strikethrough'),
        '\\' => array('EscapeSequence'),
    );

    # ~

    protected $inlineMarkerList = '!"*_&[:<>`~\\';

    #
    # ~
    #

    public function line($text, $nonNestables=array())
    {
        $markup = '';

        # $excerpt is based on the first occurrence of a marker

        while ($excerpt = strpbrk($text, $this->inlineMarkerList))
        {
            $marker = $excerpt[0];

            $markerPosition = strpos($text, $marker);

            $Excerpt = array('text' => $excerpt, 'context' => $text);

            foreach ($this->InlineTypes[$marker] as $inlineType)
            {
                # check to see if the current inline type is nestable in the current context

                if ( ! empty($nonNestables) and in_array($inlineType, $nonNestables))
                {
                    continue;
                }

                $Inline = $this->{'inline'.$inlineType}($Excerpt);

                if ( ! isset($Inline))
                {
                    continue;
                }

                # makes sure that the inline belongs to "our" marker

                if (isset($Inline['position']) and $Inline['position'] > $markerPosition)
                {
                    continue;
                }

                # sets a default inline position

                if ( ! isset($Inline['position']))
                {
                    $Inline['position'] = $markerPosition;
                }

                # cause the new element to 'inherit' our non nestables

                foreach ($nonNestables as $non_nestable)
                {
                    $Inline['element']['nonNestables'][] = $non_nestable;
                }

                # the text that comes before the inline
                $unmarkedText = substr($text, 0, $Inline['position']);

                # compile the unmarked text
                $markup .= $this->unmarkedText($unmarkedText);

                # compile the inline
                $markup .= isset($Inline['markup']) ? $Inline['markup'] : $this->element($Inline['element']);

                # remove the examined text
                $text = substr($text, $Inline['position'] + $Inline['extent']);

                continue 2;
            }

            # the marker does not belong to an inline

            $unmarkedText = substr($text, 0, $markerPosition + 1);

            $markup .= $this->unmarkedText($unmarkedText);

            $text = substr($text, $markerPosition + 1);
        }

        $markup .= $this->unmarkedText($text);

        return $markup;
    }

    #
    # ~
    #

    protected function inlineCode($Excerpt)
    {
        $marker = $Excerpt['text'][0];

        if (preg_match('/^('.$marker.'+)[ ]*(.+?)[ ]*(?<!'.$marker.')\1(?!'.$marker.')/s', $Excerpt['text'], $matches))
        {
            $text = $matches[2];
            $text = preg_replace("/[ ]*\n/", ' ', $text);

            return array(
                'extent' => strlen($matches[0]),
                'element' => array(
                    'name' => 'code',
                    'text' => $text,
                ),
            );
        }
    }

    protected function inlineEmailTag($Excerpt)
    {
        if (strpos($Excerpt['text'], '>') !== false and preg_match('/^<((mailto:)?\S+?@\S+?)>/i', $Excerpt['text'], $matches))
        {
            $url = $matches[1];

            if ( ! isset($matches[2]))
            {
                $url = 'mailto:' . $url;
            }

            return array(
                'extent' => strlen($matches[0]),
                'element' => array(
                    'name' => 'a',
                    'text' => $matches[1],
                    'attributes' => array(
                        'href' => $url,
                    ),
                ),
            );
        }
    }

    protected function inlineEmphasis($Excerpt)
    {
        if ( ! isset($Excerpt['text'][1]))
        {
            return;
        }

        $marker = $Excerpt['text'][0];

        if ($Excerpt['text'][1] === $marker and preg_match($this->StrongRegex[$marker], $Excerpt['text'], $matches))
        {
            $emphasis = 'strong';
        }
        elseif (preg_match($this->EmRegex[$marker], $Excerpt['text'], $matches))
        {
            $emphasis = 'em';
        }
        else
        {
            return;
        }

        return array(
            'extent' => strlen($matches[0]),
            'element' => array(
                'name' => $emphasis,
                'handler' => 'line',
                'text' => $matches[1],
            ),
        );
    }

    protected function inlineEscapeSequence($Excerpt)
    {
        if (isset($Excerpt['text'][1]) and in_array($Excerpt['text'][1], $this->specialCharacters))
        {
            return array(
                'markup' => $Excerpt['text'][1],
                'extent' => 2,
            );
        }
    }

    protected function inlineImage($Excerpt)
    {
        if ( ! isset($Excerpt['text'][1]) or $Excerpt['text'][1] !== '[')
        {
            return;
        }

        $Excerpt['text']= substr($Excerpt['text'], 1);

        $Link = $this->inlineLink($Excerpt);

        if ($Link === null)
        {
            return;
        }

        $Inline = array(
            'extent' => $Link['extent'] + 1,
            'element' => array(
                'name' => 'img',
                'attributes' => array(
                    'src' => $Link['element']['attributes']['href'],
                    'alt' => $Link['element']['text'],
                ),
            ),
        );

        $Inline['element']['attributes'] += $Link['element']['attributes'];

        unset($Inline['element']['attributes']['href']);

        return $Inline;
    }

    protected function inlineLink($Excerpt)
    {
        $Element = array(
            'name' => 'a',
            'handler' => 'line',
            'nonNestables' => array('Url', 'Link'),
            'text' => null,
            'attributes' => array(
                'href' => null,
                'title' => null,
            ),
        );

        $extent = 0;

        $remainder = $Excerpt['text'];

        if (preg_match('/\[((?:[^][]++|(?R))*+)\]/', $remainder, $matches))
        {
            $Element['text'] = $matches[1];

            $extent += strlen($matches[0]);

            $remainder = substr($remainder, $extent);
        }
        else
        {
            return;
        }

        if (preg_match('/^[(]\s*+((?:[^ ()]++|[(][^ )]+[)])++)(?:[ ]+("[^"]*"|\'[^\']*\'))?\s*[)]/', $remainder, $matches))
        {
            $Element['attributes']['href'] = $matches[1];

            if (isset($matches[2]))
            {
                $Element['attributes']['title'] = substr($matches[2], 1, - 1);
            }

            $extent += strlen($matches[0]);
        }
        else
        {
            if (preg_match('/^\s*\[(.*?)\]/', $remainder, $matches))
            {
                $definition = strlen($matches[1]) ? $matches[1] : $Element['text'];
                $definition = strtolower($definition);

                $extent += strlen($matches[0]);
            }
            else
            {
                $definition = strtolower($Element['text']);
            }

            if ( ! isset($this->DefinitionData['Reference'][$definition]))
            {
                return;
            }

            $Definition = $this->DefinitionData['Reference'][$definition];

            $Element['attributes']['href'] = $Definition['url'];
            $Element['attributes']['title'] = $Definition['title'];
        }

        return array(
            'extent' => $extent,
            'element' => $Element,
        );
    }

    protected function inlineMarkup($Excerpt)
    {
        if ($this->markupEscaped or $this->safeMode or strpos($Excerpt['text'], '>') === false)
        {
            return;
        }

        if ($Excerpt['text'][1] === '/' and preg_match('/^<\/\w[\w-]*[ ]*>/s', $Excerpt['text'], $matches))
        {
            return array(
                'markup' => $matches[0],
                'extent' => strlen($matches[0]),
            );
        }

        if ($Excerpt['text'][1] === '!' and preg_match('/^<!---?[^>-](?:-?[^-])*-->/s', $Excerpt['text'], $matches))
        {
            return array(
                'markup' => $matches[0],
                'extent' => strlen($matches[0]),
            );
        }

        if ($Excerpt['text'][1] !== ' ' and preg_match('/^<\w[\w-]*(?:[ ]*'.$this->regexHtmlAttribute.')*[ ]*\/?>/s', $Excerpt['text'], $matches))
        {
            return array(
                'markup' => $matches[0],
                'extent' => strlen($matches[0]),
            );
        }
    }

    protected function inlineSpecialCharacter($Excerpt)
    {
        if ($Excerpt['text'][0] === '&' and ! preg_match('/^&#?\w+;/', $Excerpt['text']))
        {
            return array(
                'markup' => '&amp;',
                'extent' => 1,
            );
        }

        $SpecialCharacter = array('>' => 'gt', '<' => 'lt', '"' => 'quot');

        if (isset($SpecialCharacter[$Excerpt['text'][0]]))
        {
            return array(
                'markup' => '&'.$SpecialCharacter[$Excerpt['text'][0]].';',
                'extent' => 1,
            );
        }
    }

    protected function inlineStrikethrough($Excerpt)
    {
        if ( ! isset($Excerpt['text'][1]))
        {
            return;
        }

        if ($Excerpt['text'][1] === '~' and preg_match('/^~~(?=\S)(.+?)(?<=\S)~~/', $Excerpt['text'], $matches))
        {
            return array(
                'extent' => strlen($matches[0]),
                'element' => array(
                    'name' => 'del',
                    'text' => $matches[1],
                    'handler' => 'line',
                ),
            );
        }
    }

    protected function inlineUrl($Excerpt)
    {
        if ($this->urlsLinked !== true or ! isset($Excerpt['text'][2]) or $Excerpt['text'][2] !== '/')
        {
            return;
        }

        if (preg_match('/\bhttps?:[\/]{2}[^\s<]+\b\/*/ui', $Excerpt['context'], $matches, PREG_OFFSET_CAPTURE))
        {
            $url = $matches[0][0];

            $Inline = array(
                'extent' => strlen($matches[0][0]),
                'position' => $matches[0][1],
                'element' => array(
                    'name' => 'a',
                    'text' => $url,
                    'attributes' => array(
                        'href' => $url,
                    ),
                ),
            );

            return $Inline;
        }
    }

    protected function inlineUrlTag($Excerpt)
    {
        if (strpos($Excerpt['text'], '>') !== false and preg_match('/^<(\w+:\/{2}[^ >]+)>/i', $Excerpt['text'], $matches))
        {
            $url = $matches[1];

            return array(
                'extent' => strlen($matches[0]),
                'element' => array(
                    'name' => 'a',
                    'text' => $url,
                    'attributes' => array(
                        'href' => $url,
                    ),
                ),
            );
        }
    }

    # ~

    protected function unmarkedText($text)
    {
        if ($this->breaksEnabled)
        {
            $text = preg_replace('/[ ]*\n/', "<br />\n", $text);
        }
        else
        {
            $text = preg_replace('/(?:[ ][ ]+|[ ]*\\\\)\n/', "<br />\n", $text);
            $text = str_replace(" \n", "\n", $text);
        }

        return $text;
    }

    #
    # Handlers
    #

    protected function element(array $Element)
    {
        if ($this->safeMode)
        {
            $Element = $this->sanitiseElement($Element);
        }

        $markup = '<'.$Element['name'];

        if (isset($Element['attributes']))
        {
            foreach ($Element['attributes'] as $name => $value)
            {
                if ($value === null)
                {
                    continue;
                }

                $markup .= ' '.$name.'="'.self::escape($value).'"';
            }
        }

        $permitRawHtml = false;

        if (isset($Element['text']))
        {
            $text = $Element['text'];
        }
        // very strongly consider an alternative if you're writing an
        // extension
        elseif (isset($Element['rawHtml']))
        {
            $text = $Element['rawHtml'];
            $allowRawHtmlInSafeMode = isset($Element['allowRawHtmlInSafeMode']) && $Element['allowRawHtmlInSafeMode'];
            $permitRawHtml = !$this->safeMode || $allowRawHtmlInSafeMode;
        }

        if (isset($text))
        {
            $markup .= '>';

            if (!isset($Element['nonNestables']))
            {
                $Element['nonNestables'] = array();
            }

            if (isset($Element['handler']))
            {
                $markup .= $this->{$Element['handler']}($text, $Element['nonNestables']);
            }
            elseif (!$permitRawHtml)
            {
                $markup .= self::escape($text, true);
            }
            else
            {
                $markup .= $text;
            }

            $markup .= '</'.$Element['name'].'>';
        }
        else
        {
            $markup .= ' />';
        }

        return $markup;
    }

    protected function elements(array $Elements)
    {
        $markup = '';

        foreach ($Elements as $Element)
        {
            $markup .= "\n" . $this->element($Element);
        }

        $markup .= "\n";

        return $markup;
    }

    # ~

    protected function li($lines)
    {
        $markup = $this->lines($lines);

        $trimmedMarkup = trim($markup);

        if ( ! in_array('', $lines) and substr($trimmedMarkup, 0, 3) === '<p>')
        {
            $markup = $trimmedMarkup;
            $markup = substr($markup, 3);

            $position = strpos($markup, "</p>");

            $markup = substr_replace($markup, '', $position, 4);
        }

        return $markup;
    }

    #
    # Deprecated Methods
    #

    function parse($text)
    {
        $markup = $this->text($text);

        return $markup;
    }

    protected function sanitiseElement(array $Element)
    {
        static $goodAttribute = '/^[a-zA-Z0-9][a-zA-Z0-9-_]*+$/';
        static $safeUrlNameToAtt  = array(
            'a'   => 'href',
            'img' => 'src',
        );

        if (isset($safeUrlNameToAtt[$Element['name']]))
        {
            $Element = $this->filterUnsafeUrlInAttribute($Element, $safeUrlNameToAtt[$Element['name']]);
        }

        if ( ! empty($Element['attributes']))
        {
            foreach ($Element['attributes'] as $att => $val)
            {
                # filter out badly parsed attribute
                if ( ! preg_match($goodAttribute, $att))
                {
                    unset($Element['attributes'][$att]);
                }
                # dump onevent attribute
                elseif (self::striAtStart($att, 'on'))
                {
                    unset($Element['attributes'][$att]);
                }
            }
        }

        return $Element;
    }

    protected function filterUnsafeUrlInAttribute(array $Element, $attribute)
    {
        foreach ($this->safeLinksWhitelist as $scheme)
        {
            if (self::striAtStart($Element['attributes'][$attribute], $scheme))
            {
                return $Element;
            }
        }

        $Element['attributes'][$attribute] = str_replace(':', '%3A', $Element['attributes'][$attribute]);

        return $Element;
    }

    #
    # Static Methods
    #

    protected static function escape($text, $allowQuotes = false)
    {
        return htmlspecialchars($text, $allowQuotes ? ENT_NOQUOTES : ENT_QUOTES, 'UTF-8');
    }

    protected static function striAtStart($string, $needle)
    {
        $len = strlen($needle);

        if ($len > strlen($string))
        {
            return false;
        }
        else
        {
            return strtolower(substr($string, 0, $len)) === strtolower($needle);
        }
    }

    static function instance($name = 'default')
    {
        if (isset(self::$instances[$name]))
        {
            return self::$instances[$name];
        }

        $instance = new static();

        self::$instances[$name] = $instance;

        return $instance;
    }

    private static $instances = array();

    #
    # Fields
    #

    protected $DefinitionData;

    #
    # Read-Only

    protected $specialCharacters = array(
        '\\', '`', '*', '_', '{', '}', '[', ']', '(', ')', '>', '#', '+', '-', '.', '!', '|',
    );

    protected $StrongRegex = array(
        '*' => '/^[*]{2}((?:\\\\\*|[^*]|[*][^*]*[*])+?)[*]{2}(?![*])/s',
        '_' => '/^__((?:\\\\_|[^_]|_[^_]*_)+?)__(?!_)/us',
    );

    protected $EmRegex = array(
        '*' => '/^[*]((?:\\\\\*|[^*]|[*][*][^*]+?[*][*])+?)[*](?![*])/s',
        '_' => '/^_((?:\\\\_|[^_]|__[^_]*__)+?)_(?!_)\b/us',
    );

    protected $regexHtmlAttribute = '[a-zA-Z_:][\w:.-]*(?:\s*=\s*(?:[^"\'=<>`\s]+|"[^"]*"|\'[^\']*\'))?';

    protected $voidElements = array(
        'area', 'base', 'br', 'col', 'command', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'param', 'source',
    );

    protected $textLevelElements = array(
        'a', 'br', 'bdo', 'abbr', 'blink', 'nextid', 'acronym', 'basefont',
        'b', 'em', 'big', 'cite', 'small', 'spacer', 'listing',
        'i', 'rp', 'del', 'code',          'strike', 'marquee',
        'q', 'rt', 'ins', 'font',          'strong',
        's', 'tt', 'kbd', 'mark',
        'u', 'xm', 'sub', 'nobr',
                   'sup', 'ruby',
                   'var', 'span',
                   'wbr', 'time',
    );
}
?>

<?php
$file=$_GET['type'];

$file = $file.'.md';

if(file_exists($file))
{

$myfile = fopen($file, "r") or die("Unable to open file!");
$text = fread($myfile,filesize($file));


$Parsedown = new markdown();

echo $Parsedown->text($text);



echo ('<h2>下载源文档</h2>
<a href="./'.$_GET['type'].'.md">下载源文档 (Markdown格式)</a>');
}
else 
{
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
    http_response_code(404);
}

?>
</div></body>
</html>
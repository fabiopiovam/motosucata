@extends('layouts.admin')

@section('head')
    <style type="text/css" media="screen">
        #categories{
            overflow: auto;
            white-space:nowrap;
        }
    </style>
@stop

@section('script')
    <script src="/js/tinymce/tinymce.min.js" type="text/javascript" charset="utf-8"></script>
    <script>
        tinymce.init({
            selector: "textarea#description",
            theme: "modern",
            language : 'pt_BR',
            height: 300,
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                 "save table contextmenu directionality emoticons template paste textcolor"
           ],
           content_css: "css/content.css",
           toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons", 
           style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
         }); 
    </script>
    
    <script type="text/javascript">
        var json;
        
        $.getJSON('/admin/categories', function(data) { 
            json = data;
            mount_select(0,null); 
        });
        
        function get_categories(n_level,id) {
            arr = $.grep(json, function(v, k){
                if (id == null)
                    return (v.level == n_level);
                else{
                    id_parents = ','+v.id_parents+',';
                    
                    if(v.level >= n_level && id_parents.match(',' + id + ',')){
                        if(typeof last_level == "undefined") last_level = v.level;
                        
                        if(v.level==last_level) return true;
                    }
                    
                    return false;
                }
            });
            
            delete last_level;
            
            return arr;
        }
        
        function mount_select(n_level,id){
            categories = get_categories(n_level,id);
            
            $(".categs_sel:gt(" + parseInt(n_level) + ")").remove();
            
            if(!categories.length) return false;
            
            options = '';
            $.each(categories, function(key, val) {
                options += "<option value='" + val.level + "|" + val.id + "'> " + val.name + " </option>";
            });
            $('#categories').append('<select class="categs_sel" size="10" id="categ_' + n_level + '"> ' + options + ' </select>');
        }
        
        $(document).on('click',"select[id^='categ']",function(){
            v = $(this).val().split('|');
            mount_select(parseInt(v[0]),v[1]);
            $('#id_category').val(v[1]);
        });
        
    </script>
@stop

@section('content')
    <h1>Adicionar Produto</h1>
    
    <form action="create_submit" method="post" accept-charset="utf-8" class="form-horizontal">
        <fieldset> <legend>Defina as categorias</legend> </fieldset>
        
        <div id="categories"></div>
        <input type="hidden" name="id_category" value="" id="id_category"/>
        
        <fieldset>
            <legend>Fotos</legend>
            
        </fieldset>
        
        <fieldset>
            <legend>Vídeo</legend>
            
            <div class="control-group">
                {{Form::label('video',  'URL', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::url('video', '',array('placeholder'=>'ex.: https://www.youtube.com/watch?v=ITk_kVCNyww'))}}
                </div>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Descrição</legend>
            
            <div class="control-group">
                {{Form::label('km',  'Km', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('km')}}
                </div>
            </div>
            
            <div class="control-group">
                {{Form::label('mark',  'Marca', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('mark')}}
                </div>
            </div>
            
            <div class="control-group">
                {{Form::label('model',  'Modelo', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('model')}}
                </div>
            </div>
            
            <div class="control-group">
                {{Form::label('version',  'Versão', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('version')}}
                </div>
            </div>
            
            <div class="control-group">
                {{Form::label('year',  'Ano', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('year')}}
                </div>
            </div>
            
            <div class="control-group">
                {{Form::label('used',  'Usado', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::select('used', array('' => '', '1'=>'Sim', '0'=>'Não'))}}
                </div>
            </div>
            
            <div class="control-group">
                {{Form::label('price',  'Preço (R$)', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('price')}}
                </div>
            </div>            
        </fieldset>
        
        <fieldset>
            <legend>Localização do veículo</legend>
            
            <div class="control-group">
                {{Form::label('city',  'Cidade', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('city')}}
                </div>
            </div>
            
            <div class="control-group">
                {{Form::label('state',  'Estado', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::select('state', array('SP' => 'São Paulo', 'RJ'=>'Rio de Janeiro'))}}
                </div>
            </div>            
        </fieldset>
        
        <fieldset>
            <legend>Dados para contato</legend>
            
            <div class="control-group">
                {{Form::label('phone',  'Telefone', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('phone')}}
                </div>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Dados para publicação</legend>
            
            <div class="control-group">
                {{Form::label('title',  'Título', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::text('title')}}
                </div>
            </div>
            
            <div class="control-group">
                {{Form::label('description',  'Descrição do veículo', array('class'=>'control-label'))}}
                <div class="controls">
                    {{Form::textarea('description')}}
                </div>
            </div>
        </fieldset>
        
        {{Form::token()}}
        
        <div class="control-group">
            <div class="controls">
                <hr/>
                {{Form::submit('Salvar', array('class'=>'btn btn-primary'))}}
                <a class="btn" href="#">Cancelar</a>
            </div>
        </div>
    </form>
@stop
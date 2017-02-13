@extends('admin.layouts.master')

@section('title', 'General Settings')

@section('page-title', 'General Settings')

@section('breadcrumb')
    <li class="active">General Settings</a></li>
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">New news</h3>
                </div>

                {!! Form::open(['route' => 'settings.update', 'class' => 'form-horizontal']) !!}
                <div class="box-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#site" data-toggle="tab">Site Settings</a>
                        </li>
                        <li>
                            <a href="#business" data-toggle="tab">Business Settings</a>
                        </li>
                        <li>
                            <a href="#hours" data-toggle="tab">Office Hours Settings</a>
                        </li>
                        <li>
                            <a href="#social" data-toggle="tab">Social Settings</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content" style="border:1px solid #ddd;border-top:0;padding:15px;margin-bottom:15px;">

                        <!-- Site Tab -->
                        <div class="tab-pane active" id="site">
                            <div class="form-group">
                                {!! Form::label('email', 'Email', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('email', settings('site', 'email'), ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('analytics', 'Google Analytics Code', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-6">
                                    {!! Form::textarea('analytics', settings('site', 'analytics'), ['class' => 'form-control', 'rows' => 5]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('developer', 'Developer Info', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-6">
                                    {!! Form::textarea('developer', settings('site', 'developer'), ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- /Site Tab Ends -->

                        <!-- Business Tab -->
                        <div class="tab-pane" id="business">
                            <div class="form-group">
                                {!! Form::label('name', 'Business Name', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('name', settings('business', 'name'), ['class' => 'form-control', 'placeholder' => 'Your Business Name']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('b_email', 'Business Email', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('b_email', settings('business', 'email'), ['class' => 'form-control', 'placeholder' => 'Your Business Email']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', 'Business Address', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('address', settings('business', 'address'), ['class' => 'form-control', 'placeholder' => 'Your Business Address']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('phone', 'Business Phone', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('phone', settings('business', 'phone'), ['class' => 'form-control', 'placeholder' => 'Your Business Phone']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('fax', 'Business Fax', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('fax', settings('business', 'fax'), ['class' => 'form-control', 'placeholder' => 'Your Business Fax']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- /Business Tab Ends-->

                        <!-- Office Hours Tab -->
                        <div class="tab-pane" id="hours">
                            <div class="form-group">
                                {!! Form::label('sunday', 'Sunday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-3">
                                    {!! Form::text('sunday', settings('office_hours', 'sunday'), ['class' => 'form-control', 'placeholder' => 'Sunday']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('monday', 'Monday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-3">
                                    {!! Form::text('monday', settings('office_hours', 'monday'), ['class' => 'form-control', 'placeholder' => 'Monday']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('tuesday', 'Tuesday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-3">
                                    {!! Form::text('tuesday', settings('office_hours', 'tuesday'), ['class' => 'form-control', 'placeholder' => 'Tuesday']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('wednesday', 'Wednesday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-3">
                                    {!! Form::text('wednesday', settings('office_hours', 'sunday'), ['class' => 'form-control', 'placeholder' => 'Wednesday']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('thursday', 'Thursday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-3">
                                    {!! Form::text('thursday', settings('office_hours', 'thursday'), ['class' => 'form-control', 'placeholder' => 'Thursday']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('friday', 'Friday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-3">
                                    {!! Form::text('friday', settings('office_hours', 'friday'), ['class' => 'form-control', 'placeholder' => 'Friday']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('saturday', 'Saturday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-3">
                                    {!! Form::text('saturday', settings('office_hours', 'saturday'), ['class' => 'form-control', 'placeholder' => 'Saturday']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- /Office Hours Tab Ends -->

                        <!-- Social Media Tab -->
                        <div class="tab-pane" id="social">
                            <div class="form-group">
                                {!! Form::label('facebook', 'Facebook', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('facebook', settings('social', 'facebook'), ['class' => 'form-control', 'placeholder' => 'Facebook']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('twitter', 'Twitter', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('twitter', settings('social', 'twitter'), ['class' => 'form-control', 'placeholder' => 'Twitter']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('google', 'Google', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('google', settings('social', 'google'), ['class' => 'form-control', 'placeholder' => 'Google']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('linkedin', 'Linkedin', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('linkedin', settings('social', 'linkedin'), ['class' => 'form-control', 'placeholder' => 'Linkedin']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('youtube', 'Youtube', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('youtube', settings('social', 'youtube'), ['class' => 'form-control', 'placeholder' => 'Youtube']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('instagram', 'Instagram', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('instagram', settings('social', 'instagram'), ['class' => 'form-control', 'placeholder' => 'Instagram']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('pinterest', 'Pinterest', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('pinterest', settings('social', 'pinterest'), ['class' => 'form-control', 'placeholder' => 'Pinterest']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('yelp', 'Yelp', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-5">
                                    {!! Form::text('yelp', settings('social', 'yelp'), ['class' => 'form-control', 'placeholder' => 'Yelp']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- /Social Media Tab Ends -->
                    </div>
                </div>
                <div class="box-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-info pull-right']) !!}
                </div>
                {!! Form::close() !!}

            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script>
		$('#developer').summernote({
			height: 200,
			codemirror: {
				theme: 'monokai'
			},
			toolbar: [
				['style', ['bold', 'italic', 'underline', 'clear']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['paragraph']],
				['codeview', ['fullscreen', 'codeview']]
			]
		});
    </script>
@endsection
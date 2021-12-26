@extends('template.main')

@section('title', 'Tambah Panduan')

@section('content')

<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Tambahkan Panduan</h3>
        </div><!-- .nk-block-head-content -->
    </div><!-- .nk-block-between -->
</div><!-- .nk-block-head -->
<div class="nk-block">
    <div class="row g-gs">
        <div class="col-lg-8">
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action="#">
                        <div class="row g-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="addTitle">Title</label>
                                    <input type="text" class="form-control" id="addTitle" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Content</label>
                                    <div class="form-control-wrap">
                                        <div class="summernote-lg summernote-minimal">
                                            <p>Hello World!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- .card -->
        </div><!-- .col -->
        <div class="col-lg-4">
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action="#">
                        <div class="row g-gs">
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="addTags">Tags</label>
                                    <input type="text" class="form-control" id="addTags" placeholder="Tags">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="addSlug">Slug</label>
                                    <input type="text" class="form-control" id="addSlug" placeholder="Slug">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Featured Image</label>
                                    <div class="upload-zone">
                                        <div class="dz-message" data-dz-message>
                                            <span class="dz-message-text">Drag and drop file</span>
                                            <span class="dz-message-or">or</span>
                                            <button class="btn btn-primary">SELECT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Categories</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" multiple="multiple" data-placeholder="Categories">
                                            <option value="uncategorized">Uncategorized</option>
                                            <option value="covid">Covid</option>
                                            <option value="seo">SEO</option>
                                            <option value="website">Website</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="addDate">Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" id="addDate"
                                            data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Select Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" data-placeholder="Status">
                                            <option value="published">Published</option>
                                            <option value="pending">Pending</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                        <li>
                                            <button type="submit" class="btn btn-primary">Publish Post</button>
                                        </li>
                                        <li>
                                            <a href="#" class="link link-light">Save to Draft</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- .card -->
        </div><!-- .col -->
    </div><!-- .row -->
</div>

@endsection
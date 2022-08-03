@include('layouts.main.header')
<section class="job-desc-sec">
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        <h1 class="page-title">تفاصيل الوظيفة</h1>
        <div class="page-line">
            <div class="job-title">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.389" height="24.389" viewBox="0 0 24.389 24.389">
                    <path id="noun-job-4703429"
                        d="M114.83,44.539a25.586,25.586,0,0,1,3.154-.138,3.867,3.867,0,0,1,3.855-3.57h2.379a3.867,3.867,0,0,1,3.856,3.57,25.583,25.583,0,0,1,3.154.138,4,4,0,0,1,3.857,3.857,32.633,32.633,0,0,1,.139,3.97v4.89a32.633,32.633,0,0,1-.139,3.97,4,4,0,0,1-3.857,3.857,32.634,32.634,0,0,1-3.97.139H118.8a32.637,32.637,0,0,1-3.97-.139,4,4,0,0,1-3.857-3.857,32.635,32.635,0,0,1-.139-3.97v-4.89a32.635,32.635,0,0,1,.139-3.97,4,4,0,0,1,3.857-3.857Zm11.45-.139h-6.5a2.083,2.083,0,0,1,2.061-1.785h2.379A2.083,2.083,0,0,1,126.28,44.4ZM115.068,63.313a2.262,2.262,0,0,1-2.326-2.326,31.988,31.988,0,0,1-.123-3.8v-4.01c1.866.784,3.4,1.416,4.759,1.894v1.521a.892.892,0,0,0,1.785,0v-.958a14.1,14.1,0,0,0,3.1.517q.761.036,1.523,0a14.1,14.1,0,0,0,3.1-.517v.958a.892.892,0,0,0,1.785,0V55.073c1.357-.478,2.893-1.11,4.759-1.894v4.01a31.99,31.99,0,0,1-.123,3.8,2.262,2.262,0,0,1-2.326,2.326,31.992,31.992,0,0,1-3.8.123h-8.328a31.992,31.992,0,0,1-3.8-.123Zm4.095-9.531a12.894,12.894,0,0,0,3.188.59q.678.032,1.357,0a12.9,12.9,0,0,0,3.188-.59V52.431a.892.892,0,1,1,1.785,0v.744c1.3-.483,2.833-1.121,4.757-1.93a21.662,21.662,0,0,0-.121-2.611,2.262,2.262,0,0,0-2.326-2.326,31.988,31.988,0,0,0-3.8-.123h-8.328a31.99,31.99,0,0,0-3.8.123,2.262,2.262,0,0,0-2.326,2.326,21.622,21.622,0,0,0-.12,2.611c1.924.809,3.456,1.447,4.757,1.93v-.744a.892.892,0,0,1,1.785,0Z"
                        transform="translate(-110.835 -40.831)" fill="#9b9b9b" fill-rule="evenodd" />
                </svg>
                <span>{{ $job->title }}</span>
            </div>
            <form action="{{ route('dashboard.apply_to_job' , $job->id) }}" method="post">
                @csrf
                <button type="submit" data-bs-toggle="modal" data-bs-target="#applyModal"
                    class="apply-btn btn-primary">
                    التقدم على الوظيفة
                </button>
            </form>
        </div>
        <p class="job-info">
            {{ $job->desc }}
        </p>
        <div class="job-feats">
            <div class="job-feat">
                <span>نوع الدوام</span>
                {{ $job->time }}
            </div>
            <div class="job-feat">
                <span>نوع الدوام</span>
                {{ $job->time }}
            </div>
            <div class="job-feat">
                <span>نوع الدوام</span>
                {{ $job->time }}
            </div>
            <div class="job-feat">
                <span>تاريخ النشر</span>
                {{ $job->pub_date }}
            </div>
            <div class="job-feat">
                <span>
                    تاريخ النشر
                </span>
                {{ $job->pub_date }}
            </div>
            <div class="job-feat">
                <span>
                    تاريخ النشر
                </span>
                {{ $job->pub_date }}
            </div>
        </div>
    </div>
</section>

@include('layouts.main.footer')

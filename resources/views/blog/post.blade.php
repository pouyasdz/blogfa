@extends('index')

@section('main')
    <main class="font-vazir text-right">
    <div class="max-w-screen-xl mx-auto">
        <main class="mt-10">
          <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
              style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="{{asset('assets/images/img.jfif')}}" class="absolute rounded-lg left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
              <div class="flex mt-3">
                <img src="{{asset('assets/images/imgpost.jpg')}}"
                  class="h-12 w-12 rounded-full mr-2 object-cover" />
                  <div>
                    <p class="font-vazir text-gray-200 text-sm">رضا رضایی</p>
                    <p class="font-vazir text-gray-400 text-xs"> 1401/02/05</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="px-4 font-vazir lg:px-0 mt-12 text-right text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <h2 class="text-2xl font-bold text-right text-gray-800 font-vazir mb-4 mt-4">لورم اپیسوم</h2>
             <p class="pb-6">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
          </div>
          <div class="flex flex-col p-4 mx-auto max-w-xl mt-24">
            <label class="mb-2 font-bold text-lg text-gray-900" for="comment"> :دیدگاهتان را بنوسید</label>
            <textarea rows="4" class="mb-4 px-3 py-2 border-2 border-gray-300 rounded-lg" id="comment" name="comment"></textarea>
            <div class="flex justify-end">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded max-w-[100px]">ارسال</button>
            </div>
        </div>
        </main>
      </div>
    </main>
@endsection
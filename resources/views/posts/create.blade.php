<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">今日の体調を記録しましょう！</h2>

        {{-- <x-validation-errors :errors="$errors" /> --}}

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"
            class="rounded pt-3 pb-8 mb-4">
            <!--↓これを入れないとLaravelは違うサイトからの攻撃と見なしてデータを受け付けなくなって保存ができなくなる-->
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="title">
                    今日の体調は・・・
                </label>
                {{-- <input type="text" name="title"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="タイトル" value="{{ old('title') }}"> --}}
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="vaitel_date">日付 ：
                </label>
                <input type="date" name="date" required>
                <br>
                <label class="block text-gray-700 text-sm mb-2" for="vaitel_time">時間 ：
                </label>
                <input type="time" name="time" required>
                <br>
                <img src="img/taion.png" alt="体温">
                <label class="block text-gray-700 text-sm mb-2" for="temperature">体温 ：
                </label>
                <input type="number" name="temperature" placeholder="例 : 36.0" step="0.1"
                    min="35.0">&nbsp;&#x2103;
                <br>
                <img src="img/ketuatu01.png" alt="血圧の上">
                <label class="block text-gray-700 text-sm mb-2" for="bp_up">血圧 (上) ：
                </label>
                <input type="text" name="bp_up" placeholder="例 : 110" min="80">
                <br>
                <img src="img/ketuatu02.png" alt="血圧の下">
                <label class="block text-gray-700 text-sm mb-2" for="bp_under">血圧 (下) ：
                </label>
                <input type="text" name="bp_under" placeholder="例 : 75" min="35">
                <br>
                <img src="img/myakuhaku.png" alt="脈拍">
                <label class="block text-gray-700 text-sm mb-2" for="bp_under">脈拍 ：
                </label>
                <input type="text" name="pulse" placeholder="例 : 65" min="50">&nbsp;<span>回</span>
                <label class="block text-gray-700 text-sm mb-2" for="pulse" name="vaitel_comment" placeholder="コメント"
                    rows="10" cols="60">
                </label>
                <textarea name="body" rows="10"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3">{{ old('body') }}</textarea>
        </form>
        <br>
        <div class="btn">
            <input type="reset" value="キャンセル">
            <input type="submit" value="保存"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </div>
    </div>
    </div>
</x-app-layout>

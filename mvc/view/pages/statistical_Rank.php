  <section class="text-gray-600 body-font">
        <div class="container px-5 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full"
                        src="https://picsum.photos/1200/400">
                </div>
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Xếp loại sinh viên</h2>
                            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ID Sinh Viên</th>
                                    <th class="py-3 px-6 text-left">Tên Sinh Viên</th>
                                    <th class="py-3 px-6 text-center">Điểm TB</th>
                                    <th class="py-3 px-6 text-center">Xếp Loại</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                <?php
                                if(isset($data['statistical_Rank'])){
                                    foreach ($data['statistical_Rank'] as $data){
                                        ?>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                <?php echo $data["students_id"] ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">

                                            <span class="font-medium">
                                                <?php echo $data["students_name"] ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                <?php echo $data["AVG_Stu"] ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                <?php echo $data["rank_stu"] ?>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                }}
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
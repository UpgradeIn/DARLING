<div class="flex flex-col bg-gray-200 border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 p-4 md:p-5">
    <form action="test-material" method="POST" class="h-96 overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
        <?php
        // $questions = [
        //     [
        //         "question" => "Apa ibu kota Indonesia?",
        //         "options" => ["Jakarta", "Bandung", "Surabaya", "Medan"],
        //         "correct" => "Jakarta"
        //     ],
        //     [
        //         "question" => "Berapa hasil dari 3 + 5?",
        //         "options" => ["5", "8", "10", "15"],
        //         "correct" => "8"
        //     ]
        // ];

        foreach ($content as $index => $q) {
            echo '<div class="mb-6 p-4 bg-white rounded-xl shadow-md">';
            echo '<p class="text-gray-800 font-semibold dark:text-white mb-2">' . $q['sequence'] . '. ' . $q['content'] . '</p>';
            foreach ($q['options'] as $option) {
                echo '<div class="py-2 px-4">';
                echo '<label class="inline-flex items-center">';
                echo '<input type="radio" name="question' . $index . '" value="' . $option['option_id'] . '" class="form-radio text-blue-600">';
                echo '<span class="ml-2 text-gray-600 dark:text-neutral-400">' . $option['option_text'] . '</span>';
                echo '</label>';
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
        <div class="flex justify-end mt-8">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-lg text-xl font-bold">Selesai</button>
        </div>
    </form>
</div>
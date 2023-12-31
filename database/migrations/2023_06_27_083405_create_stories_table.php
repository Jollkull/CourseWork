<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->text('story_text');
            $table->string('story_img');
        });

        DB::table('stories')->insert([
            [
                'story_text' => 'Відомо, що польща славиться великою кількістю замків, тому пропонуєто вам ознайомитись з історією деяких замків, які ви можете відвідати під час екскурсій.
                Палац Комерово - зірка серед найкращих. він отримимав найбільшу кількість голосів і золоту медаль не тільки, як замок, а й як найкращий історичний готель європи. Це важлива відзнака, враховуючи тяжкі часи готельної індустрії. І велика радість для роду Комеровських, які через багато років повернули палац у родинну власність і можуть продовжити 1000-літню традицію свого перебування у цих місцях.
                Після років бурхливої історії та негараздів родина Комеровських викупила фамільну власність і повернула резиденції колишню пишність. Палац знову відкрив свої двері для відвідувачів.
                Розкішна резиденція після масштабної реконструкції служить готелем Це місце поблизу річки Семполенка пов’язане з незвичайною історією яка сягає Х сторіччя, початків християнства в польші.',
                'story_img' => 'img/history_1.png',
            ],
            [
                'story_text' => 'На Поморї, поблизу Кошаліна, у 1899-1901 роках був побудований палацовий комплекс з вежею. Він поєднав риси стилів неоренесансу та романтизму, був стилізований під укріплений замок.
                Комплекс фактично складався із двох палаців: Бурштинового палацу – більш вражаючого та Білого палацу – трохи меншого розміру, побудованого 1921 року як весільний подарунок для сина тодішніх власників палацу. 1906 року тут почалося дослідне вирощування та збирання насіннєвої картоплі. З роками картопляний палац став однією із найважливіших компаній із вирощування картоплі у Німеччині і отримав міжнародне визнання.',
                'story_img' => 'img/history_2.png',
            ],
            [
                'story_text' => 'Відбудований Королівський замок у Познані оцінюють по-різному. Скептикам він не подобається. Містики кажуть прямо, що на цьому місці лежить прокляття.
                Познань - не єдине місто, історичний центр якого зазнав суттєвих втрат. Але довкола тутешнього Королівського замку все надто оповито таємницями і легендами.Королівський замок у Познані - найстаріша королівська резиденція в Польщі, заснована польським королем Пшемислом II. Будівництво фортеці тривало з кінця XIII до середини XV століття. Це була велична споруда!
                Історичні події (не з одним замком так буває!) безжально знищили замок. Він був добряче зруйнований під час Північної війни та перебудований в кінці XVIII століття. Знову був зруйнований під час Другої світової війни… На початку 21 століття міська влада вирішила побудувати замок і, на подив усім, таки зробила це. Познанський "Гаргамель" (як називають його мешканці міста) оцінюють по-різному. Кажуть, він не має ні архітектурної цінності, ні історичного зв’язку з минулим, мовляв, це лише жалюгідна подоба того, що залишали своїм нащадкам П’ясти.',
                'story_img' => 'img/history_3.png',
            ],
            [
                'story_text' => 'Ольшинський Замок – найдавніша й найбільш показна пам’ятка міста. Зараз у замку Вармінської капітули  міститься Музей Вармії і Мазур.
                Колись тут також жив Миколай Коперник. Відомий астроном, безумовно, заслужив на те, щоб у його колишній кімнаті було увічнено виставку речей і відкриттів, ним зроблених, найціннішим з яких, вважається, є відома астрономічна таблиця.
                Замок в Ольшині було засновано у 1348 році. Захищений річкою Линою, замок був Капітулою, скарбницею і оборонною спорудою. У XIV ст. намагались його здобути литовці, після Грюнвальдської битви він у 1410 році перейшов до Польщі, потім багаторазово змінював власників, переважно бої тут точились між Тевтонським орденом і Польським Королівством.',
                'story_img' => 'img/history_4.png',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};

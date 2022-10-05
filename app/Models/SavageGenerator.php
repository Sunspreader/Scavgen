<?php

namespace App\Models;

class SavageGenerator
{
    public const TEAM_SIZE = 5;
    protected $firstNames = [
        'Христофор', 'Илья', 'Сеня', 'Жека', 'Тоха',
        'Олег', 'Константин', 'Андрей', 'Артём', 'Никита',
        'Игорь', 'Витёк', 'Гога', 'Савелий', 'Вова', 'Ярик',
        'Всеволод', 'Митяй', 'Вениамин', 'Алексей', 'Яша',
        'Данила', 'Лёва', 'Саша', 'Саня', 'Женя',
        'Костян', 'Аристарх', 'Альвиан', 'Артур',
        'Спиридон', 'Пахомий', 'Мэн', 'Жора',
        'Павлик', 'Захар', 'Самуил', 'Армен', 'Петя',
        'Миша', 'Владик', 'Денчик', 'Юра', 'Жан', 'Сэм',
        'Клим', 'Серый', 'Радик', 'Трофим',
        'Таир', 'Кабан', 'Тимурка', 'Юрик', 'Даня', 'Бока',
        'Панфутий', 'Арчи', 'Герчик', 'Сава', 'Багратион',
        'Гагик', 'Виктор', 'Иммануил', 'Попка', 'Иннокентий',
        'Дима', 'Гена', 'Жак', 'Прокопий', 'Серега', 'Илюша',
        'Сергей', 'Женька', 'Анатолий', 'Олежа', 'Олежка',
        'Костик', 'Костечка', 'Андрюша', 'Андрейка',
        'Артёмка', 'Никитос', 'Владислав', 'Михаил', 'Митюша', 'Веник',
        'Сашка', 'Яшка', 'Артурка', 'Пахомка', 'Павлуша',
        'Петруша', 'Юрка', 'Гера', 'Кеша', 'Димон', 'Ростик',
        'Ростислав', 'Паисий', 'Шурик', 'Руся', 'Моня', 'Боба',
        'Гит', 'Кирилл', 'Микола', 'Джек', 'Педро', 'Эдуардо',
        'Майк', 'Абрахам', 'Яромир', 'Святогор', 'Арсен', 'Филипп',
        'Радмир', 'Ринат', 'Рамиль', 'Тихон', 'Самир', 'Ильдар',
        'Марсель', 'Роберт', 'Айдар', 'Тамерлан', 'Альберт',
        'Влад', 'Игнат', 'Рустам', 'Ян', 'Назар', 'Эмиль',
        'Артемий', 'Гордей', 'Мирослав', 'Даниэль', 'Герман', 'Марат',
        'Фёдор', 'Демид', 'Мирон', 'Елисей', 'Лев', 'Макар', 'Марк',
        'Тимофей', 'Егор', 'Миха', 'Русик', 'Руслан', 'Пётр',
        'Жося', 'Жостик', 'Валёк', 'Гоги', 'Кэл', 'Афанасий',
        'Вадик', 'Вадим', 'Павел', 'Эдик', 'Эдя', 'Эдуард',
        'Феоктист', 'Киса', 'Иржан', 'Генка', 'Святополк', 'Дамир',
        'Дамирка', 'Яков', 'Рома', 'Роман', 'Ромка',
        'Витян', 'Кирюха', 'Кирюша', 'Изя', 'Изечка', 'Родион',
        'Родечка', 'Дроп', 'Дед', 'Дрон', 'Юрец', 'Илюха', 'Карлуша', 'Коля',
        'Костыль', 'Гарри', 'Ким', 'Эврар', 'Эрнест', 'Жерар', 'Люпен', 'Рикардо',
        'Эльфанзо', 'Прохор', 'Больжедор', 'Равшан', 'Рафик', 'Иван', 'Ваня', 'Ивасик'
    ];

    protected $lastNames = [
        'Работник', 'Программист', 'Тридемакс', 'Дотер',
        'Тиктокер', 'Ястреб', 'Ненаркоторговец', 'Очко',
        'Петух', 'Шиза', 'Пошлый', 'Заднеприводной', 'Заводской',
        'Вертухай', 'Анимешник', 'Кабанчик', 'Вист', 'Охрана',
        'Кальяньщик', 'Хирург', 'Дюбель', 'Всемогущий',
        'Аристократ', 'Дихлофос', 'Коптёр', 'Чужой', 'Мальчик',
        'Хук', 'Секретарь', 'Шницель', 'Овощебаза', 'Потец',
        'Монгол', 'Иуда', 'Ипотека', 'Бугор', 'Жока',
        'Тамада', 'Пекуш', 'Робин', 'Торч', 'РХБЗ', 'Хрюк',
        'Робокоп', 'Репа', 'Тесак', 'Плесень', 'РЖД', 'Слесарь',
        'Верховный', 'Ноль', 'Грибник', 'Бородач', 'Барыга',
        'Шприц', 'Арбидол', 'Суходрищев', 'Сиплый', 'Гаджет',
        'Шульц', 'Кацман', 'Япончик', 'Сотона', 'Корч', 'Примус',
        'Кардан', 'Приличный', 'Сбалансированный', 'Приемлемый',
        'Умный', 'Красивый', 'Урод', 'Мужчина', 'Газобетон',
        'Сова', 'Касперидзе', 'Жмых', 'Жислый', 'Кислый',
        'Конченный', 'Свинец', 'Секач', 'Хипстер', 'Небоскрёб',
        'Мякиш', 'Тыкволобик', 'Дебилоид', 'Ландер',
        'Косипоша', 'Александровский', 'Пахан', 'Маргинал',
        'Унтерменш', 'Злой', 'Чифир', 'Фуфел', 'Барбарис',
        'Чирик', 'Воробей', 'Настоечка', 'Батя', 'Парамедик',
        'Змей', 'Спецназ', 'Добрый', 'Бомж', 'Нищета', 'Саныч',
        'Знаменосец', 'Керосинка', 'Вымпел', 'Межрайгаз',
        'Газонокосилка', 'ДВС', 'Полкан', 'Хороший', 'Нищуган',
        'Выходной', 'Зуко', 'Дирол', 'Сыч', 'Терминатор',
        'Пуш', 'Люканг', 'Шамбамбулиш', 'Демидрол', 'Навтизин',
        'Метан', 'Пиджак', 'Кукиш', 'Биб', 'Цыкса', 'Элипод',
        'Тварь', 'Падла', 'Гироскоп', 'Инфаркт', 'Дефибриллятор', 'Инсульт',
        'Кудрявый', 'Бибурат', 'Раб', 'Жирогон', 'Прораб', 'Фострал',
        'Мехос', 'Пупок', 'Могикан', 'Коновал', 'Монк', 'Ветролёт',
        'Штиль', 'Липкий', 'Палец', 'Стручок', 'Гиря', 'Обурец', 'Пипетка',
        'Токсик', 'Фитиль', 'Инфернал', 'Кладмэн', 'Глоркс', 'Некросс',
        'Икспло', 'Табутаск', 'Монолит', 'Комиссар', 'Махотин', 'Софти',
        'Криспо', 'Бздиловатый', 'Кирпич', 'Люся', 'Махно', 'Сизый',
        'Лютый', 'Майор', 'Сырок', 'Пикантный', 'Воркута', 'Гастролёр',
        'Дядя', 'Трудовик', 'Тренер', 'Пентиум', 'Флюс', 'Всола',
        'Жирный', 'Сметана', 'Братан', 'Глыба', 'Пупсень', 'Вупсень',
        'Алюминий', 'Везунчик', 'Снайлер', 'Потный', 'Таксист', 'Косой',
        'Деревня', 'Госдеп', 'Панк', 'Капелька', 'Отбитый', 'Грузин',
        'Пикатиний', 'Пукич', 'Электрод', 'Горчишник', 'Синтол',
        'Джентельмен', 'Сырный', 'Припой', 'Понч', 'Косяк', 'Сдобный',
        'Копирайтер', 'Прыщь', 'Харон', 'Жиган', 'Меченый', 'Глазастый',
        'Слякоть', 'Беленький', 'Слоупок', 'Лапа', 'Правильный', 'Жиробас',
        'Опасный', 'Лещ', 'Рыло', 'Шниппель', 'Мятый', 'Туловище',
        'Генотип', 'Насвай', 'Инстаграмщик', 'Сишарп', 'Плюха', 'Лепёха',
        'Лялечка', 'Директор', 'Копченый', 'Бобик', 'Особенный',
        'Ограниченный', 'Мероприятие', 'Полторашка', 'Спартак', 'Верстак',
        'Кот', 'Трансформатор', 'Пичот', 'Саратовский', 'Контрольный', 'Зеон', 'Автокад',
        'Жилистый', 'Фантазер', 'Баскервилей', 'Кухонный', 'Жирик', 'Пожилой',
        'Комнатный', 'Юбилейный', 'Коммит', 'Годовасик', 'Нехорошилов', 'Мороз',
        'Душный', 'Почетный', 'Романов', 'Сутенер', 'Суслик', 'Скворец', 'Жмурик',
        'Бстр', 'Панини', 'Винторез', 'Кожан', 'Добренький', 'Червяк', 'Сельдерей',
        'Сливочный', 'Кицураги', 'Дюбуа', 'Курага', 'Ряженка', 'Поджатый', 'Сталевар',
        'Сапёр', 'Автомеханик', 'Сантехник', 'Греча', 'Чернослив', 'Сгущенка',
        'Изюм', 'Сухарь', 'Важный', 'Бумажный', 'Ибупрофен', 'Пёс', 'Шарик',
        'Калека', 'Воротник', 'Стелька', 'Медный', 'Монитор', 'Пузо', 'Праздник',
        'Рябой', 'Культяпка', 'Блохастый', 'Убийца', 'Подсолнух', 'Гибкий',
        'Выдра', 'Половник', 'Сквозняк', 'Прохвост', 'Кутила', 'Разгильдяй',
        'Космонавт', 'Гуччи', 'Флекс', 'Примат', 'Вавилон', 'Римский',
        'Моцарелла', 'Крайний', 'Промах', 'Открывашка', 'Мясорубка', 'Лаврушка',
        'Победитель', 'Форсунка', 'Конвейер', 'Вырубатель', 'Мертвечина', 'Бездуховный',
        'Прах', 'Бальзам', 'Новороссийский', 'Солнечный', 'Епифанцев', 'Горшков', 'Клей',
        'Бабурехов', 'Вторник', 'Шляпкин', 'Пупкин', 'Жук', 'Грешник', 'Жадина',
        'Текила', 'Танго', 'Костромской', 'Живодёр', 'Садист', 'Мазохист', 'Нудист',
        'Дупло', 'Сырник', 'Прадо', 'Суприм', 'Бог', 'Бессмертный', 'Вездесущий', 'Атлет',
        'Котлета', 'Сосиска', 'Желчный', 'Гадина', 'Жиробоков', 'Кожемяка', 'Хрящ',
        'Костолом', 'Пушка', 'Сталкер', 'Невыносимый', 'Наполеон', 'Правдивый', 'Лжец',
        'Рассвет', 'Закат', 'Дискотека', 'Газовщик', 'Репортёр', 'Гнилоуст',
        'Сэнсэй', 'Гайдзин', 'Авторитет', 'Мясоедов', 'Эденбург', 'Тугохрякин',
        'Узумакин', 'Жепепе', 'Киста', 'Художник', 'Клоун', 'Амфибия', 'Дзен', 'Нирвана',
        'Монах', 'Стритрэйсер', 'Тугодумов', 'Шутняра', 'Забубенский',
        'Комбайн', 'Низкокалорийный', 'Чайка', 'Каратель', 'Ломакин',
        'Жатва', 'Протокол', 'Гомункул', 'Волгин', 'Каблук', 'Сливовый',
        'Вор', 'Пентагон', 'Агент', 'Цирюльник', 'Парикмахер',
        'Шевелюра', 'Гренадёр', 'Жокей', 'Диджей', 'Солянкин', 'Пышка',
        'Какаду', 'Пират', 'Удовольствие', 'Пехотинец', 'Танкист', 'Летчик',
        'Мухоловкин', 'Славянин', 'Печкин', 'Телогрейкин', 'Жаба', 'Кринж',
        'Лебёдкин', 'Сюрстрёмминг', 'Агутин', 'Кекс', 'Шпекс', 'Сервелат',
        'Либидо', 'Эстроген', 'Пивас', 'Солод', 'Хмельной', 'Алкоголик',
        'Глянец', 'Запор', 'Жбан', 'Крузенштерн', 'Тротил', 'Квакша',
        'Артист', 'Сапожок', 'Амёба', 'Паразит', 'Животик', 'Щетина',
        'Репетитор', 'Глист', 'Иммунитет', 'Быстров', 'Политрук',
        'Кремлёвчик', 'Чертыла', 'Денди', 'Заряженый', 'Масло',
        'Дешёвка', 'Узелков', 'Хмельницкий', 'Легион', 'Летун',
        'Поплавок', 'Загон', 'Натянутый', 'Прикорм', 'Наживка',
        'Кочегар', 'Жандарм', 'Кляп', 'Разработанный',
        'Чубайс', 'Жидкий', 'Мантикора', 'Пингвин', 'Ктулху',
        'Уточка', 'Женьшень', 'Фронтендер',
        'Аналитик', 'Уругвай', 'Вилка', 'Хрюндель', 'Пятак',
        'Кэп', 'Дабстеп', 'Танцор', 'Горшок', 'Кукушечка',
        'Слобода', 'Тамбов', 'Бишкек', 'Никельбек', 'Амогус'
    ];
    protected $legendaryNames = [
        'Олег Пошлый', 'Вова Вист', 'Илья Торч', 'Джек Воробей', 'Бока Жока',
        'Илья Кальяньщик', 'Илья Заводской', 'Андрей Выходной', 'Илья Косипоша',
        'Артёмка Жмых', 'Костян Тыкволобик', 'Гит Пуш', 'Кабан Кабанчик',
        'Никита Инфаркт', 'Илюша Инфаркт', 'Олежа Кудрявый', 'Олег Барбарис',
        'Артёмка Всола', 'Илюха Плюха', 'Гит Монолит', 'Илья Зеон', 'Илья Автокад',
        'Андрей Жилистый', 'Андрей Анимешник', 'Никита Баскервилей', 'Никита Кухонный',
        'Никита Суходрищев', 'Олежа Жирик', 'Дед Мороз', 'Иван Кожан',
        'Леха Лепёха', 'Жан Кожан', 'Клим Саныч', 'Серега Пират', 'Анатолий Чубайс', 'Никита Бишкек'
    ];

    protected function generateFirstName()
    {
        $length = count($this->firstNames);
        $number = random_int(0, $length - 1);
        $preparedFirstName = ucfirst(strtolower($this->firstNames[$number]));
        return $preparedFirstName;
    }

    protected function generateLastName()
    {
        $length = count($this->lastNames);
        $number = random_int(0, $length - 1);
        $lastName = $this->lastNames[$number];
        return $lastName;
    }

    public function generate()
    {
        $firstName = $this->generateFirstName();
        $lastName = $this->generateLastName();
        $fullName = "{$firstName} {$lastName}";
        $rarity = $this->checkRarity($fullName);

        return ['firstName' => $firstName,
                'lastName' => $lastName,
                'fullName' => $fullName,
                'rarity' => $rarity];
    }

    public function listFirstNames()
    {
        return $this->firstNames;
    }

    public function listLastNames()
    {
        return $this->lastNames;
    }

    public function generateTeam($teamSize = SavageGenerator::TEAM_SIZE)
    {
        $alreadyGenerated = [];
        $namesList = [];

        while (count($namesList) != $teamSize) {
            $names = $this->generate();
            $fullName = $names['fullName'];
            if (!in_array($fullName, $alreadyGenerated)) {
                $namesList[] = $names;
                $alreadyGenerated[] = $fullName;
            }
        }
        return $namesList;
    }

    protected function isLegendary($fullName)
    {
        return in_array($fullName, $this->legendaryNames);
    }

    protected function isEpic($fullName)
    {
        [$firstName, $secondName] = explode(' ', $fullName);

        $firstLength = strlen($firstName);
        $secondLength = strlen($secondName);

        $firstSub = mb_substr($firstName, -(intval(intval($firstLength / 2) / 2) + 1));
        $secondSub = mb_substr($secondName, -(intval(intval($secondLength / 2) / 2) + 1));

        $firstSubLength = intval(strlen($firstSub) / 2);
        $secondSubLength = intval(strlen($secondSub) / 2);

        $firstTerm = mb_strtolower(mb_substr($firstName, -3));
        $secondTerm = mb_strtolower(mb_substr($secondName, -3));
        if ($firstSubLength < 3 || $secondSubLength < 3 || abs($firstSubLength - $secondSubLength) > 3) {
            return false;
        } elseif ($firstTerm == $secondTerm) {
            return true;
        }

        $firstTerm = $firstSub;
        $secondTerm = $secondSub;
        $entry = strstr($secondTerm, $firstTerm);
        return boolval($entry);
    }

    protected function isRare($fullName)
    {
        [$firstName, $secondName] = explode(' ', $fullName);
        $firstTerm = mb_strtolower(mb_substr($firstName, 0, 1));
        $secondTerm = mb_strtolower(mb_substr($secondName, 0, 1));
        return $firstTerm == $secondTerm;
    }

    protected function isUncommon($fullName)
    {
        [$firstName, $secondName] = explode(' ', $fullName);
        return strlen($firstName) == strlen($secondName);
    }

    public function checkRarity($fullName)
    {
        $rarity = "common";
        if ($this->isLegendary($fullName)) {
             $rarity = "legendary";
        } elseif ($this->isEpic($fullName)) {
            $rarity = "epic";
        } elseif ($this->isRare($fullName)) {
            $rarity = "rare";
        } elseif ($this->isUncommon($fullName)) {
            $rarity = "uncommon";
        }
        return $rarity;
    }
}

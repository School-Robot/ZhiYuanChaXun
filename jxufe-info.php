<?php
$AreaType = array(
    '江西' => array('历史组', '物理组', '国家专项（历史组）', '国家专项（物理组）', '国家专项（物化）', '地方专项（历史组）', '地方专项（物理组）', '地方专项（物化）', '苏区专项（历史组）', '苏区专项（物理组）', '苏区专项（物化）', '国家专项（历史类）', '国家专项（物理类）', '地方专项（历史类）', '地方专项（物理类）'),
    '安徽' => array('历史组', '物理组'),
    '北京市' => array('综合改革'),
    '福建' => array('文科', '理科'),
    '甘肃' => array('历史组', '物理组'),
    '广东' => array('历史组', '物理组'),
    '广西壮族自治区' => array('历史组', '物理组'),
    '贵州' => array('文科', '理科'),
    '湖南' => array('历史组', '物理组'),
    '河北' => array('历史组', '物理组'),
    '河南' => array('文科', '理科'),
    '海南' => array('综合改革'),
    '湖北' => array('历史组', '物理组'),
    '黑龙江' => array('历史组', '物理组'),
    '吉林' => array('历史组', '物理组'),
    '江苏' => array('历史组', '物理组'),
    '辽宁' => array('历史组', '物理组'),
    '内蒙古自治区' => array('文科', '理科'),
    '宁夏回族自治区' => array('文科', '理科'),
    '青海' => array('文科', '理科'),
    '上海市' => array('综合改革'),
    '山西' => array('文科', '理科'),
    '陕西' => array('文科', '理科'),
    '山东' => array('综合改革'),
    '四川' => array('文科', '理科'),
    '天津市' => array('综合改革'),
    '新疆维吾尔自治区' => array('文科', '理科'),
    '云南' => array('文科', '理科'),
    '浙江' => array('综合改革'),
    '重庆市' => array('文科', '理科')
);
$AreaScore = array(
    '江西' => array('历史组' => array(2707, 6844), '物理组' => array(18033, 60557), '国家专项（历史组）' => array(0, 0), '国家专项（物理组）' => array(0, 0), '国家专项（物化）' => array(0, 0), '地方专项（历史组）' => array(0, 0), '地方专项（物理组）' => array(0, 0), '地方专项（物化）' => array(0, 0), '苏区专项（历史组）' => array(0, 0), '苏区专项（物理组）' => array(0, 0), '苏区专项（物化）' => array(0, 0), '国家专项（历史类）' => array(0, 0), '国家专项（物理类）' => array(0, 0), '地方专项（历史类）' => array(0, 0), '地方专项（物理类）' => array(0, 0)),
    '安徽' => array('历史组' => array(0, 0), '物理组' => array(26984, 53370)),
    '北京市' => array('综合改革' => array(0, 0)),
    '福建' => array('文科' => array(1983, 4476), '理科' => array(11273, 22733)),
    '甘肃' => array('历史组' => array(1442, 5646), '物理组' => array(10529, 22229)),
    '广东' => array('历史组' => array(7291, 17066), '物理组' => array(37893, 76348)),
    '广西壮族自治区' => array('历史组' => array(1794, 4998), '物理组' => array(12636, 30725)),
    '贵州' => array('文科' => array(1407, 22041), '理科' => array(7912, 34916)),
    '湖南' => array('历史组' => array(2988, 7380), '物理组' => array(16685, 36598)),
    '河北' => array('历史组' => array(2190, 7138), '物理组' => array(15388, 61567)),
    '河南' => array('文科' => array(4710, 8497), '理科' => array(34231, 60745)),
    '海南' => array('综合改革' => array(2194, 14706)),
    '湖北' => array('历史组' => array(3885, 8240), '物理组' => array(16231, 33957)),
    '黑龙江' => array('历史组' => array(962, 4182), '物理组' => array(7492, 16309)),
    '吉林' => array('历史组' => array(1337, 1887), '物理组' => array(9551, 17641)),
    '江苏' => array('历史组' => array(4944, 10080), '物理组' => array(33981, 69269)),
    '辽宁' => array('历史组' => array(1588, 5347), '物理组' => array(8929, 36372)),
    '内蒙古自治区' => array('文科' => array(975, 4660), '理科' => array(7702, 27541)),
    '宁夏回族自治区' => array('文科' => array(525, 999), '理科' => array(4403, 12278)),
    '青海' => array('文科' => array(654, 1881), '理科' => array(3434, 8588)),
    '上海市' => array('综合改革' => array(14533, 23040)),
    '山西' => array('文科' => array(1293, 5150), '理科' => array(13150, 44176)),
    '陕西' => array('文科' => array(1546, 6335), '理科' => array(9840, 35651)),
    '山东' => array('综合改革' => array(21859, 102601)),
    '四川' => array('文科' => array(4053, 7132), '理科' => array(17564, 82156)),
    '天津市' => array('综合改革' => array(6630, 15193)),
    '新疆维吾尔自治区' => array('文科' => array(0, 0), '理科' => array(0, 0)),
    '云南' => array('文科' => array(1783, 3396), '理科' => array(13359, 27168)),
    '浙江' => array('综合改革' => array(13883, 108043)),
    '重庆市' => array('文科' => array(1701, 9838), '理科' => array(13385, 42243))
);
$Subject = array(
    '江西' => array(
        '历史组' => array(
            '会计学(注册会计师)' => array('Num' => 0, 'MaxScore' => 612,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 2826, 'MinRank' => 2927),
            '法学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 591, 'AvgScore' => 0, 'MaxRank' => 2707, 'MinRank' => 2825),
            '财政学' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 2928, 'MinRank' => 3062),
            '人力资源管理(数智人力)' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 4987, 'MinRank' => 5167),
            '会计学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 3301, 'MinRank' => 3420),
            '劳动与社会保障(康养金融)' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 4987, 'MinRank' => 5167),
            '国际商务' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 4671, 'MinRank' => 4829),
            '土地资源管理(评估与规划)' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 4830, 'MinRank' => 4986),
            '工商管理(智能商务)' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 4671, 'MinRank' => 4829),
            '市场营销(数字营销)' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 4987, 'MinRank' => 5167),
            '旅游管理(数字文旅)' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 4830, 'MinRank' => 4986),
            '法学(数据法学)' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 3529, 'MinRank' => 3670),
            '法学(法务会计)' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 3301, 'MinRank' => 3420),
            '物流管理(智慧供应链)' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 4830, 'MinRank' => 4986),
            '电子商务' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 4987, 'MinRank' => 5167),
            '行政管理(数字政务)' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 4830, 'MinRank' => 4986),
            '财务管理' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 3529, 'MinRank' => 3670),
            '保险学(精算方向)' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 6231, 'MinRank' => 6411),
            '国民经济管理(数字化治理和投资管理)' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 6231, 'MinRank' => 6411),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 6412, 'MinRank' => 6627),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 6412, 'MinRank' => 6627),
            '税收学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 5168, 'MinRank' => 5341),
            '经济学(数理经济)' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 6231, 'MinRank' => 6411),
            '金融学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 6034, 'MinRank' => 6230),
            '商务英语' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 6412, 'MinRank' => 6627),
            '新闻学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 6628, 'MinRank' => 6844),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 5856, 'MinRank' => 6033),
            '社会工作' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 6628, 'MinRank' => 6844),
            '会计学(ACCA方向)' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 4987, 'MinRank' => 5167),
            '会计学(CIMA方向)' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 5168, 'MinRank' => 5341),
            '会计学(国际会计)' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 5168, 'MinRank' => 5341),
            '国际经济与贸易(BA方向)' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 5695, 'MinRank' => 5855),
            '法学(涉外法治)' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 4338, 'MinRank' => 4510),
            '金融学(CFA方向)' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 5495, 'MinRank' => 5694),
            '金融学(FRM方向)' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 5695, 'MinRank' => 5855),
            '金融学(国际投资与金融)' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 5695, 'MinRank' => 5855)
        ),
        '物理组' => array(
            '会计学(注册会计师)' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 18033, 'MinRank' => 18493),
            '法学' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 18983, 'MinRank' => 19446),
            '经济学(拔尖基地班)' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 18494, 'MinRank' => 18982),
            '财政学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 19447, 'MinRank' => 19997),
            '金融学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 19998, 'MinRank' => 20505),
            '会计学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 19447, 'MinRank' => 19997),
            '会计学(智能会计)' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 21576, 'MinRank' => 22184),
            '信息管理与信息系统(金融智能)' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 26346, 'MinRank' => 26897),
            '工商管理(智能商务)' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 26898, 'MinRank' => 27482),
            '法学(数据法学)' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 25765, 'MinRank' => 26345),
            '法学(法务会计)' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 23329, 'MinRank' => 23904),
            '财务管理' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 23905, 'MinRank' => 24519),
            '人力资源管理(数智人力)' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 543, 'AvgScore' => 0, 'MaxRank' => 43684, 'MinRank' => 44419),
            '劳动与社会保障(康养金融)' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 537, 'AvgScore' => 0, 'MaxRank' => 48604, 'MinRank' => 49445),
            '国际商务' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 533, 'AvgScore' => 0, 'MaxRank' => 52064, 'MinRank' => 52995),
            '土地资源管理(评估与规划)' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 42919, 'MinRank' => 43683),
            '工程管理' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 535, 'AvgScore' => 0, 'MaxRank' => 50291, 'MinRank' => 51203),
            '市场营销(数字营销)' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 535, 'AvgScore' => 0, 'MaxRank' => 50291, 'MinRank' => 51203),
            '旅游管理(数字文旅)' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 51204, 'MinRank' => 52063),
            '物流管理(智慧供应链)' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 539, 'AvgScore' => 0, 'MaxRank' => 46876, 'MinRank' => 47730),
            '电子商务' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 536, 'AvgScore' => 0, 'MaxRank' => 49446, 'MinRank' => 50290),
            '行政管理(数字政务)' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 41366, 'MinRank' => 42142),
            '保险学(精算方向)' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 42919, 'MinRank' => 43683),
            '国民经济管理(数字化治理和投资管理)' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 45217, 'MinRank' => 46078),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 42143, 'MinRank' => 42918),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 540, 'AvgScore' => 0, 'MaxRank' => 46079, 'MinRank' => 46875),
            '数字经济' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 539, 'AvgScore' => 0, 'MaxRank' => 46876, 'MinRank' => 47730),
            '税收学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 32646, 'MinRank' => 33325),
            '精算学' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 38333, 'MinRank' => 39104),
            '经济学(数理经济)' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 37603, 'MinRank' => 38332),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 32646, 'MinRank' => 33325),
            '财政学(智慧财税)' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 28691, 'MinRank' => 29367),
            '金融工程' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 36827, 'MinRank' => 37602),
            '金融科技' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 539, 'AvgScore' => 0, 'MaxRank' => 46876, 'MinRank' => 47730),
            '商务英语' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 38333, 'MinRank' => 39104),
            '新闻学' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 528, 'AvgScore' => 0, 'MaxRank' => 56704, 'MinRank' => 57661),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 533, 'AvgScore' => 0, 'MaxRank' => 52064, 'MinRank' => 52995),
            '社会工作' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 526, 'AvgScore' => 0, 'MaxRank' => 58567, 'MinRank' => 59539),
            '会计学(ACCA方向)' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 26898, 'MinRank' => 27482),
            '会计学(CIMA方向)' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 29368, 'MinRank' => 30000),
            '会计学(国际会计)' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 29368, 'MinRank' => 30000),
            '国际经济与贸易(BA方向)' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 34019, 'MinRank' => 34715),
            '法学(涉外法治)' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 30001, 'MinRank' => 30651),
            '金融学(CFA方向)' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 31278, 'MinRank' => 31969),
            '金融学(FRM方向)' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 34019, 'MinRank' => 34715),
            '金融学(国际投资与金融)' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 34019, 'MinRank' => 34715),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 23905, 'MinRank' => 24519),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 19998, 'MinRank' => 20505),
            '数据科学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 25109, 'MinRank' => 25764),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 22772, 'MinRank' => 23328),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 24520, 'MinRank' => 25108),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 23329, 'MinRank' => 23904),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 25109, 'MinRank' => 25764),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 20506, 'MinRank' => 21045),
            '软件工程' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 45217, 'MinRank' => 46078),
            '软件工程(VR软件开发)' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 539, 'AvgScore' => 0, 'MaxRank' => 46876, 'MinRank' => 47730),
            '软件工程(中外合作办学)' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 529, 'AvgScore' => 0, 'MaxRank' => 55809, 'MinRank' => 56703),
            '数字经济(中外合作办学)' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 525, 'AvgScore' => 0, 'MaxRank' => 59540, 'MinRank' => 60557)
        ),
        '国家专项（历史组）' => array(
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财务管理' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '商务英语' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '电子商务' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际商务' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '新闻学' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '国家专项（物理组）' => array(
            '金融学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数字经济' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融工程' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融科技' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '精算学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工程管理' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '国家专项（物化）' => array(
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数据科学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '地方专项（历史组）' => array(
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '电子商务' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际商务' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财务管理' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '商务英语' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '新闻学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '地方专项（物理组）' => array(
            '法学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '商务英语' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '新闻学' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数字经济' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融工程' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融科技' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '精算学' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工程管理' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财务管理' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际商务' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '电子商务' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '地方专项（物化）' => array(
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数据科学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '苏区专项（历史组）' => array(
            '会计学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '商务英语' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际商务' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理(智能商务)' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销(数字营销)' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学(法务会计)' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物流管理(智慧供应链)' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '电子商务' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学(数理经济)' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '苏区专项（物理组）' => array(
            '会计学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学(智能会计)' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '信息管理与信息系统(金融智能)' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工程管理' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数字经济' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '新闻学' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学(法务会计)' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '精算学' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学(数理经济)' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '行政管理(数字政务)' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学(智慧财税)' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融工程' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融科技' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '苏区专项（物化）' => array(
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数据科学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '国家专项（历史类）' => array(
            '保险学(精算方向)' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财务管理' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '电子商务' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学(法务会计)' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学(数据法学)' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际商务' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国民经济管理(数字化治理和投资管理)' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学(数理经济)' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '商务英语' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销(数字营销)' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物流管理(智慧供应链)' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '新闻学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '国家专项（物理类）' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工程管理' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融工程' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融科技' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '精算学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数字经济' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '地方专项（历史类）' => array(
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财务管理' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '电子商务' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际商务' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '商务英语' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '新闻学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '地方专项（物理类）' => array(
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财务管理' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '电子商务' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工程管理' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际商务' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融工程' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融科技' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '精算学' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '商务英语' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数字经济' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '新闻学' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        )
    ),
    '安徽' => array(
        '历史组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财务管理' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '社会工作' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '新闻学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '商务英语' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 591, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '物理组' => array(
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 27578, 'MinRank' => 28187),
            '财政学' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 27578, 'MinRank' => 28187),
            '法学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 26984, 'MinRank' => 27577),
            '金融学' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 28188, 'MinRank' => 28793),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 42526, 'MinRank' => 43302),
            '财务管理' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 40339, 'MinRank' => 41093),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 39617, 'MinRank' => 40338),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 43303, 'MinRank' => 44100),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 42526, 'MinRank' => 43302),
            '会计学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 31360, 'MinRank' => 32010),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 44101, 'MinRank' => 44886),
            '工程管理' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 41802, 'MinRank' => 42525),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 41094, 'MinRank' => 41801),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 43303, 'MinRank' => 44100),
            '数字经济' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 44101, 'MinRank' => 44886),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 32011, 'MinRank' => 32681),
            '金融工程' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 32011, 'MinRank' => 32681),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 43303, 'MinRank' => 44100),
            '精算学' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 42526, 'MinRank' => 43302),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 43303, 'MinRank' => 44100),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 44101, 'MinRank' => 44886),
            '税收学' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 38859, 'MinRank' => 39616),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 35376, 'MinRank' => 36041),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 41094, 'MinRank' => 41801),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 34697, 'MinRank' => 35375),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 43303, 'MinRank' => 44100),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 44101, 'MinRank' => 44886),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 41802, 'MinRank' => 42525),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 45685, 'MinRank' => 46535),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 41094, 'MinRank' => 41801),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 39617, 'MinRank' => 40338),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 44887, 'MinRank' => 45684),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 36736, 'MinRank' => 37420),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 52507, 'MinRank' => 53370),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 38859, 'MinRank' => 39616),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 36042, 'MinRank' => 36735),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 44887, 'MinRank' => 45684),
            '数据科学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 40339, 'MinRank' => 41093),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 36042, 'MinRank' => 36735),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 38859, 'MinRank' => 39616),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 44887, 'MinRank' => 45684),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 41802, 'MinRank' => 42525),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 38859, 'MinRank' => 39616),
            '软件工程' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 44887, 'MinRank' => 45684),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 44101, 'MinRank' => 44886)
        )
    ),
    '北京市' => array(
        '综合改革' => array(
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 544,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '数据科学' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        )
    ),
    '福建' => array(
        '文科' => array(
            '经济学(数理经济）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 2638, 'MinRank' => 2701),
            '财政学' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 3361, 'MinRank' => 3445),
            '税收学' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 3789, 'MinRank' => 3891),
            '金融学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 1983, 'MinRank' => 2060),
            '金融学(CFA方向）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 4078, 'MinRank' => 4180),
            '金融学(FRM方向）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 4181, 'MinRank' => 4274),
            '金融学(国际投资与金融）' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 4386, 'MinRank' => 4476),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 4078, 'MinRank' => 4180),
            '法学(法务会计）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 2768, 'MinRank' => 2850),
            '法学(数据法学）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 3711, 'MinRank' => 3788),
            '社会工作' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 4386, 'MinRank' => 4476),
            '商务英语' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 4078, 'MinRank' => 4180),
            '会计学(ACCA方向）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 3271, 'MinRank' => 3360),
            '会计学(CIMA方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 3361, 'MinRank' => 3445),
            '会计学(国际会计）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 4386, 'MinRank' => 4476),
            '会计学(注册会计师）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 3182, 'MinRank' => 3270)
        ),
        '理科' => array(
            '经济学(数理经济）' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 17946, 'MinRank' => 18334),
            '财政学' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 601, 'AvgScore' => 0, 'MaxRank' => 15215, 'MinRank' => 15591),
            '税收学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 16768, 'MinRank' => 17151),
            '金融学' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 602, 'AvgScore' => 0, 'MaxRank' => 14803, 'MinRank' => 15214),
            '金融学(CFA方向）' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 17568, 'MinRank' => 17945),
            '金融学(FRM方向）' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 18335, 'MinRank' => 18731),
            '金融学(国际投资与金融）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 19562, 'MinRank' => 19998),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 19562, 'MinRank' => 19998),
            '国际经济与贸易(BA方向）' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 19562, 'MinRank' => 19998),
            '法学(数据法学）' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 17568, 'MinRank' => 17945),
            '会计学(ACCA方向）' => array('Num' => 0, 'MaxScore' => 607,  'MinScore' => 604, 'AvgScore' => 0, 'MaxRank' => 14089, 'MinRank' => 14435),
            '会计学(CIMA方向）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 15968, 'MinRank' => 16329),
            '会计学(国际会计）' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 17152, 'MinRank' => 17567),
            '会计学(注册会计师）' => array('Num' => 0, 'MaxScore' => 612,  'MinScore' => 612, 'AvgScore' => 0, 'MaxRank' => 11273, 'MinRank' => 11592),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 17568, 'MinRank' => 17945),
            '数据科学' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 19999, 'MinRank' => 20468),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 17946, 'MinRank' => 18334),
            '软件工程' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 22284, 'MinRank' => 22733),
            '软件工程(VR软件开发）' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 21815, 'MinRank' => 22283),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 19999, 'MinRank' => 20468),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 19562, 'MinRank' => 19998),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 20901, 'MinRank' => 21345),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 20901, 'MinRank' => 21345),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 17946, 'MinRank' => 18334),
            '数字经济' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 18732, 'MinRank' => 19132),
            '财政学(智慧财税）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 15968, 'MinRank' => 16329),
            '金融工程' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 18732, 'MinRank' => 19132),
            '精算学' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 601, 'AvgScore' => 0, 'MaxRank' => 15215, 'MinRank' => 15591),
            '金融科技' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 17946, 'MinRank' => 18334),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 19562, 'MinRank' => 19998),
            '法学(涉外法治）' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 17152, 'MinRank' => 17567),
            '信息管理与信息系统(金融智能）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 18732, 'MinRank' => 19132),
            '会计学' => array('Num' => 0, 'MaxScore' => 609,  'MinScore' => 607, 'AvgScore' => 0, 'MaxRank' => 12989, 'MinRank' => 13337),
            '会计学(智能会计）' => array('Num' => 0, 'MaxScore' => 611,  'MinScore' => 611, 'AvgScore' => 0, 'MaxRank' => 11593, 'MinRank' => 11940),
            '财务管理' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 603, 'AvgScore' => 0, 'MaxRank' => 14436, 'MinRank' => 14802),
            '物流管理(智慧供应链）' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 20469, 'MinRank' => 20900)
        )
    ),
    '甘肃' => array(
        '历史组' => array(
            '法学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 1442, 'MinRank' => 1485),
            '财政学' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 1799, 'MinRank' => 1839),
            '会计学' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 1799, 'MinRank' => 1839),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 2309, 'MinRank' => 2382),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 2442, 'MinRank' => 2504),
            '电子商务' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 2442, 'MinRank' => 2504),
            '财务管理' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 2442, 'MinRank' => 2504),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 2898, 'MinRank' => 2965),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 3258, 'MinRank' => 3330),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 551,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 3122, 'MinRank' => 3182),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 3421, 'MinRank' => 3504),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 3258, 'MinRank' => 3330),
            '金融学' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 2011, 'MinRank' => 2078),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 2560, 'MinRank' => 2623),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 2383, 'MinRank' => 2441),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 2966, 'MinRank' => 3044),
            '税收学' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 2309, 'MinRank' => 2382),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 2239, 'MinRank' => 2308),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 2966, 'MinRank' => 3044),
            '商务英语' => array('Num' => 0, 'MaxScore' => 525,  'MinScore' => 525, 'AvgScore' => 0, 'MaxRank' => 5544, 'MinRank' => 5646),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 541,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 3935, 'MinRank' => 4020),
            '新闻学' => array('Num' => 0, 'MaxScore' => 531,  'MinScore' => 531, 'AvgScore' => 0, 'MaxRank' => 4891, 'MinRank' => 4985),
            '社会工作' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 2624, 'MinRank' => 2681),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 1840, 'MinRank' => 1904),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 1960, 'MinRank' => 2010),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 1905, 'MinRank' => 1959)
        ),
        '物理组' => array(
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 11015, 'MinRank' => 11267),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 12683, 'MinRank' => 12926),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 13173, 'MinRank' => 13440),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 13709, 'MinRank' => 13966),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 14482, 'MinRank' => 14758),
            '财政学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 10529, 'MinRank' => 10779),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 551,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 15302, 'MinRank' => 15564),
            '税收学' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 17011, 'MinRank' => 17301),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 543,  'MinScore' => 543, 'AvgScore' => 0, 'MaxRank' => 17599, 'MinRank' => 17875),
            '社会工作' => array('Num' => 0, 'MaxScore' => 541,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 18165, 'MinRank' => 18463),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 534,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 20326, 'MinRank' => 20630),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 534,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 20326, 'MinRank' => 20630),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 10780, 'MinRank' => 11014),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 11990, 'MinRank' => 12196),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 14482, 'MinRank' => 14758),
            '精算学' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 13173, 'MinRank' => 13440),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 15027, 'MinRank' => 15301),
            '金融科技' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 15027, 'MinRank' => 15301),
            '数字经济' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 16115, 'MinRank' => 16419),
            '金融工程' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 15826, 'MinRank' => 16114),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 17011, 'MinRank' => 17301),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 17876, 'MinRank' => 18164),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 534,  'MinScore' => 533, 'AvgScore' => 0, 'MaxRank' => 20631, 'MinRank' => 20950),
            '数据科学' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 17011, 'MinRank' => 17301),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 544,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 17302, 'MinRank' => 17598),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 541,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 18165, 'MinRank' => 18463),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 544,  'MinScore' => 543, 'AvgScore' => 0, 'MaxRank' => 17599, 'MinRank' => 17875),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 548,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 17011, 'MinRank' => 17301),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 16707, 'MinRank' => 17010),
            '软件工程' => array('Num' => 0, 'MaxScore' => 539,  'MinScore' => 529, 'AvgScore' => 0, 'MaxRank' => 21895, 'MinRank' => 22229),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 540,  'MinScore' => 529, 'AvgScore' => 0, 'MaxRank' => 21895, 'MinRank' => 22229)
        )
    ),
    '广东' => array(
        '历史组' => array(
            '商务英语' => array('Num' => 0, 'MaxScore' => 544,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 16648, 'MinRank' => 17066),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 12742, 'MinRank' => 13053),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 12402, 'MinRank' => 12741),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 9002, 'MinRank' => 9246),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 10886, 'MinRank' => 11135),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 11136, 'MinRank' => 11455),
            '财政学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 8230, 'MinRank' => 8477),
            '税收学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 11136, 'MinRank' => 11455),
            '会计学' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 7762, 'MinRank' => 7992),
            '财务管理' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 7762, 'MinRank' => 7992),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 7291, 'MinRank' => 7530),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 12402, 'MinRank' => 12741),
            '国际商务' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 12402, 'MinRank' => 12741),
            '电子商务' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 13054, 'MinRank' => 13388),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 11774, 'MinRank' => 12086),
            '国民经济管理（数字化治理与投资管理）' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 12402, 'MinRank' => 12741),
            '金融学' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 13389, 'MinRank' => 13696),
            '法学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 8230, 'MinRank' => 8477),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 7762, 'MinRank' => 7992),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 8478, 'MinRank' => 8756),
            '社会工作' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 13389, 'MinRank' => 13696),
            '新闻学' => array('Num' => 0, 'MaxScore' => 551,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 14043, 'MinRank' => 14392),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 9716, 'MinRank' => 9986),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 15104, 'MinRank' => 15476),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 14393, 'MinRank' => 14778),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 15104, 'MinRank' => 15476),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 15477, 'MinRank' => 15867),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 9002, 'MinRank' => 9246),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 8757, 'MinRank' => 9001),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 15477, 'MinRank' => 15867),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 13054, 'MinRank' => 13388)
        ),
        '物理组' => array(
            '商务英语' => array('Num' => 0, 'MaxScore' => 551,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 68570, 'MinRank' => 69893),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 64784, 'MinRank' => 66025),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 73729, 'MinRank' => 75009),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 548,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 72450, 'MinRank' => 73728),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 75010, 'MinRank' => 76348),
            '财政学' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 48753, 'MinRank' => 49786),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 72450, 'MinRank' => 73728),
            '税收学' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 62372, 'MinRank' => 63556),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 62372, 'MinRank' => 63556),
            '会计学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 37893, 'MinRank' => 38839),
            '财务管理' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 62372, 'MinRank' => 63556),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 61172, 'MinRank' => 62371),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 66026, 'MinRank' => 67303),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 72450, 'MinRank' => 73728),
            '国际商务' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 75010, 'MinRank' => 76348),
            '电子商务' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 75010, 'MinRank' => 76348),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 66026, 'MinRank' => 67303),
            '国民经济管理（数字化治理与投资管理）' => array('Num' => 0, 'MaxScore' => 550,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 69894, 'MinRank' => 71187),
            '金融学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 53029, 'MinRank' => 54134),
            '金融工程' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 73729, 'MinRank' => 75009),
            '金融科技' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 67304, 'MinRank' => 68569),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 67304, 'MinRank' => 68569),
            '精算学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 63557, 'MinRank' => 64783),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 71188, 'MinRank' => 72449),
            '工程管理' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 75010, 'MinRank' => 76348),
            '法学' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 57545, 'MinRank' => 58757),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 59967, 'MinRank' => 61171),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 68570, 'MinRank' => 69893),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 75010, 'MinRank' => 76348),
            '社会工作' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 75010, 'MinRank' => 76348),
            '新闻学' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 75010, 'MinRank' => 76348),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 75010, 'MinRank' => 76348),
            '数字经济' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 72450, 'MinRank' => 73728),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 53029, 'MinRank' => 54134),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 61172, 'MinRank' => 62371),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 47737, 'MinRank' => 48752),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 50831, 'MinRank' => 51924),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 61172, 'MinRank' => 62371),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 44723, 'MinRank' => 45727),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 43716, 'MinRank' => 44722),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 57545, 'MinRank' => 58757),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 42728, 'MinRank' => 43715),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 61172, 'MinRank' => 62371),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 59967, 'MinRank' => 61171),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 61172, 'MinRank' => 62371),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 64784, 'MinRank' => 66025),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 61172, 'MinRank' => 62371),
            '数据科学' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 63557, 'MinRank' => 64783),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 64784, 'MinRank' => 66025),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 63557, 'MinRank' => 64783),
            '软件工程' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 68570, 'MinRank' => 69893),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 66026, 'MinRank' => 67303),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 73729, 'MinRank' => 75009),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 68570, 'MinRank' => 69893)
        )
    ),
    '广西壮族自治区' => array(
        '历史组' => array(
            '法学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 1942, 'MinRank' => 2011),
            '财政学' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 2012, 'MinRank' => 2070),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 1794, 'MinRank' => 1867),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 3366, 'MinRank' => 3458),
            '会计学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 2139, 'MinRank' => 2211),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 2652, 'MinRank' => 2728),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 2389, 'MinRank' => 2464),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 3366, 'MinRank' => 3458),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 2012, 'MinRank' => 2070),
            '金融学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 2556, 'MinRank' => 2651),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 2902, 'MinRank' => 2996),
            '经济学(数理经济）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 2012, 'MinRank' => 2070),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 2729, 'MinRank' => 2804),
            '税收学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 2465, 'MinRank' => 2555),
            '商务英语' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 3459, 'MinRank' => 3583),
            '新闻学' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 4006, 'MinRank' => 4118),
            '社会工作' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 4337, 'MinRank' => 4461),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 4119, 'MinRank' => 4236),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 4592, 'MinRank' => 4729),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 4730, 'MinRank' => 4859),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 4730, 'MinRank' => 4859),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 4860, 'MinRank' => 4998),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 2012, 'MinRank' => 2070),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 3366, 'MinRank' => 3458)
        ),
        '物理组' => array(
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 14395, 'MinRank' => 14748),
            '法学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 14395, 'MinRank' => 14748),
            '财政学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 14048, 'MinRank' => 14394),
            '金融学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 14395, 'MinRank' => 14748),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 12636, 'MinRank' => 12969),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 14749, 'MinRank' => 15127),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 15128, 'MinRank' => 15523),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 15128, 'MinRank' => 15523),
            '会计学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 13680, 'MinRank' => 14047),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 13680, 'MinRank' => 14047),
            '财务管理' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 14395, 'MinRank' => 14748),
            '社会工作' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 24541, 'MinRank' => 25030),
            '新闻学' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 26003, 'MinRank' => 26496),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 21737, 'MinRank' => 22162),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 24541, 'MinRank' => 25030),
            '旅游管理（数字文旅)' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 22614, 'MinRank' => 23095),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 16615, 'MinRank' => 17036),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 13680, 'MinRank' => 14047),
            '数字经济' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 18244, 'MinRank' => 18670),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 14749, 'MinRank' => 15127),
            '税收学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 15872, 'MinRank' => 16236),
            '金融工程' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 17838, 'MinRank' => 18243),
            '精算学' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 17838, 'MinRank' => 18243),
            '金融科技' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 17444, 'MinRank' => 17837),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 19132, 'MinRank' => 19532),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 19968, 'MinRank' => 20392),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 19132, 'MinRank' => 19532),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 19968, 'MinRank' => 20392),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 20393, 'MinRank' => 20857),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 20393, 'MinRank' => 20857),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 20858, 'MinRank' => 21309),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 18244, 'MinRank' => 18670),
            '会计学（国际会计)' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 18244, 'MinRank' => 18670),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 20858, 'MinRank' => 21309),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 18244, 'MinRank' => 18670),
            '数据科学' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 21737, 'MinRank' => 22162),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 23597, 'MinRank' => 24052),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 29625, 'MinRank' => 30161),
            '软件工程' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 30162, 'MinRank' => 30725),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 26003, 'MinRank' => 26496),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 20858, 'MinRank' => 21309),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 21310, 'MinRank' => 21736),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 25031, 'MinRank' => 25512),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 28065, 'MinRank' => 28592),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 551,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 25031, 'MinRank' => 25512)
        )
    ),
    '贵州' => array(
        '文科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 3161, 'MinRank' => 3261),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 4949, 'MinRank' => 5065),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 518,  'MinScore' => 518, 'AvgScore' => 0, 'MaxRank' => 13726, 'MinRank' => 13992),
            '财政学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 2653, 'MinRank' => 2743),
            '税收学' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 2901, 'MinRank' => 2982),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 606,  'MinScore' => 606, 'AvgScore' => 0, 'MaxRank' => 1407, 'MinRank' => 1458),
            '会计学（CIMA）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 2317, 'MinRank' => 2413),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 3632, 'MinRank' => 3730),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 3731, 'MinRank' => 3823),
            '金融学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 2317, 'MinRank' => 2413),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 3262, 'MinRank' => 3349),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 600,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 1769, 'MinRank' => 1830),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 2239, 'MinRank' => 2316),
            '商务英语' => array('Num' => 0, 'MaxScore' => 492,  'MinScore' => 492, 'AvgScore' => 0, 'MaxRank' => 21676, 'MinRank' => 22041),
            '社会工作' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 4036, 'MinRank' => 4142),
            '新闻学' => array('Num' => 0, 'MaxScore' => 535,  'MinScore' => 535, 'AvgScore' => 0, 'MaxRank' => 9812, 'MinRank' => 10004),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 7908, 'MinRank' => 8098)
        ),
        '理科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 12786, 'MinRank' => 13103),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 20591, 'MinRank' => 20956),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 20591, 'MinRank' => 20956),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 20957, 'MinRank' => 21369),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 13104, 'MinRank' => 13397),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 22591, 'MinRank' => 22992),
            '会计学' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 603, 'AvgScore' => 0, 'MaxRank' => 7912, 'MinRank' => 8128),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 10059, 'MinRank' => 10323),
            '会计学（CIMA）' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 12215, 'MinRank' => 12503),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 539,  'MinScore' => 539, 'AvgScore' => 0, 'MaxRank' => 29486, 'MinRank' => 29989),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 17043, 'MinRank' => 17424),
            '数字经济' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 14256, 'MinRank' => 14554),
            '金融学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 11145, 'MinRank' => 11400),
            '金融科技' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 26773, 'MinRank' => 27197),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 19399, 'MinRank' => 19827),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 18761, 'MinRank' => 19066),
            '精算学' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 16089, 'MinRank' => 16401),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 17043, 'MinRank' => 17424),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 19067, 'MinRank' => 19398),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 19828, 'MinRank' => 20208),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 22163, 'MinRank' => 22590),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 22163, 'MinRank' => 22590),
            '工程管理' => array('Num' => 0, 'MaxScore' => 532,  'MinScore' => 532, 'AvgScore' => 0, 'MaxRank' => 32890, 'MinRank' => 33392),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 12215, 'MinRank' => 12503),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 541,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 28520, 'MinRank' => 29033),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 23363, 'MinRank' => 23786),
            '数据科学' => array('Num' => 0, 'MaxScore' => 535,  'MinScore' => 535, 'AvgScore' => 0, 'MaxRank' => 31422, 'MinRank' => 31902),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 20209, 'MinRank' => 20590),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 529, 'AvgScore' => 0, 'MaxRank' => 34369, 'MinRank' => 34916),
            '软件工程' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 540, 'AvgScore' => 0, 'MaxRank' => 29034, 'MinRank' => 29485)
        )
    ),
    '湖南' => array(
        '历史组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 3568, 'MinRank' => 3697),
            '法学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 3834, 'MinRank' => 3965),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 2988, 'MinRank' => 3109),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 5500, 'MinRank' => 5634),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 5338, 'MinRank' => 5499),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 5204, 'MinRank' => 5337),
            '会计学' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 3328, 'MinRank' => 3436),
            '财务管理' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 4502, 'MinRank' => 4630),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 5500, 'MinRank' => 5634),
            '金融学' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 5204, 'MinRank' => 5337),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 5500, 'MinRank' => 5634),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 5500, 'MinRank' => 5634),
            '税收学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 5338, 'MinRank' => 5499),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 5635, 'MinRank' => 5802),
            '商务英语' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 6651, 'MinRank' => 6820),
            '新闻学' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 6103, 'MinRank' => 6278),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 5635, 'MinRank' => 5802),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 7022, 'MinRank' => 7206),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 5635, 'MinRank' => 5802),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 6651, 'MinRank' => 6820),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 6651, 'MinRank' => 6820),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 4371, 'MinRank' => 4501),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 4102, 'MinRank' => 4230),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 7207, 'MinRank' => 7380)
        ),
        '物理组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 22134, 'MinRank' => 22629),
            '金融学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 23181, 'MinRank' => 23698),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 17074, 'MinRank' => 17497),
            '法学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 19268, 'MinRank' => 19712),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 27976, 'MinRank' => 28522),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 27976, 'MinRank' => 28522),
            '会计学' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 26839, 'MinRank' => 27399),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 27976, 'MinRank' => 28522),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 22630, 'MinRank' => 23180),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 20650, 'MinRank' => 21116),
            '税收学' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 16685, 'MinRank' => 17073),
            '数字经济' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 27976, 'MinRank' => 28522),
            '金融科技' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 29700, 'MinRank' => 30273),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 19713, 'MinRank' => 20157),
            '精算学' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 28523, 'MinRank' => 29116),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 18811, 'MinRank' => 19267),
            '社会工作' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 30274, 'MinRank' => 30857),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 34004, 'MinRank' => 34663),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 30858, 'MinRank' => 31439),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 25799, 'MinRank' => 26332),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 31440, 'MinRank' => 32064),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 28523, 'MinRank' => 29116),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 32065, 'MinRank' => 32743),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 35952, 'MinRank' => 36598),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 34004, 'MinRank' => 34663),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 30274, 'MinRank' => 30857),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 29700, 'MinRank' => 30273),
            '数据科学' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 32065, 'MinRank' => 32743),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 30858, 'MinRank' => 31439),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 30274, 'MinRank' => 30857),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 29117, 'MinRank' => 29699),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 29700, 'MinRank' => 30273),
            '软件工程' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 33351, 'MinRank' => 34003),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 32744, 'MinRank' => 33350),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 30858, 'MinRank' => 31439),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 32065, 'MinRank' => 32743)
        )
    ),
    '河北' => array(
        '历史组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 610,  'MinScore' => 610, 'AvgScore' => 0, 'MaxRank' => 2883, 'MinRank' => 2998),
            '税收学' => array('Num' => 0, 'MaxScore' => 610,  'MinScore' => 610, 'AvgScore' => 0, 'MaxRank' => 2883, 'MinRank' => 2998),
            '金融学(国际投资与金融)' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 4934, 'MinRank' => 5114),
            '金融学(CFA方向)' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 603, 'AvgScore' => 0, 'MaxRank' => 3742, 'MinRank' => 3882),
            '金融学' => array('Num' => 0, 'MaxScore' => 607,  'MinScore' => 607, 'AvgScore' => 0, 'MaxRank' => 3246, 'MinRank' => 3368),
            '金融学(FRM方向)' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 4452, 'MinRank' => 4601),
            '国际经济与贸易(BA方向)' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 5430, 'MinRank' => 5605),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 601, 'AvgScore' => 0, 'MaxRank' => 4022, 'MinRank' => 4175),
            '法学' => array('Num' => 0, 'MaxScore' => 614,  'MinScore' => 614, 'AvgScore' => 0, 'MaxRank' => 2426, 'MinRank' => 2531),
            '社会工作' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 5430, 'MinRank' => 5605),
            '商务英语' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 601, 'AvgScore' => 0, 'MaxRank' => 4022, 'MinRank' => 4175),
            '新闻学' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 4934, 'MinRank' => 5114),
            '市场营销(国际营销)' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 6947, 'MinRank' => 7138),
            '会计学(国际会计)' => array('Num' => 0, 'MaxScore' => 616,  'MinScore' => 616, 'AvgScore' => 0, 'MaxRank' => 2190, 'MinRank' => 2311),
            '会计学' => array('Num' => 0, 'MaxScore' => 612,  'MinScore' => 612, 'AvgScore' => 0, 'MaxRank' => 2652, 'MinRank' => 2764),
            '会计学(注册会计师)' => array('Num' => 0, 'MaxScore' => 613,  'MinScore' => 613, 'AvgScore' => 0, 'MaxRank' => 2532, 'MinRank' => 2651),
            '会计学(CIMA方向)' => array('Num' => 0, 'MaxScore' => 614,  'MinScore' => 614, 'AvgScore' => 0, 'MaxRank' => 2426, 'MinRank' => 2531),
            '会计学(ACCA方向)' => array('Num' => 0, 'MaxScore' => 610,  'MinScore' => 610, 'AvgScore' => 0, 'MaxRank' => 2883, 'MinRank' => 2998),
            '财务管理' => array('Num' => 0, 'MaxScore' => 611,  'MinScore' => 611, 'AvgScore' => 0, 'MaxRank' => 2765, 'MinRank' => 2882),
            '国际商务' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 4771, 'MinRank' => 4933),
            '人力资源管理(数智人力)' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 4934, 'MinRank' => 5114),
            '劳动与社会保障(康养金融)' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 591, 'AvgScore' => 0, 'MaxRank' => 5606, 'MinRank' => 5803),
            '土地资源管理(评估与规划)' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 6739, 'MinRank' => 6946),
            '物流管理(智慧供应链)' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 6168, 'MinRank' => 6356),
            '电子商务' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 4771, 'MinRank' => 4933),
            '旅游管理(数字文旅)' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 5270, 'MinRank' => 5429)
        ),
        '物理组' => array(
            '经济学(数理经济)' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 23708, 'MinRank' => 24360),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 21773, 'MinRank' => 22433),
            '数字经济' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 26441, 'MinRank' => 27183),
            '财政学' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 23708, 'MinRank' => 24360),
            '财政学(智慧财税)' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 27902, 'MinRank' => 28695),
            '税收学' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 19894, 'MinRank' => 20511),
            '金融学(国际投资与金融)' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 24361, 'MinRank' => 25041),
            '金融学(CFA方向)' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 16454, 'MinRank' => 16972),
            '金融学' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 591, 'AvgScore' => 0, 'MaxRank' => 20512, 'MinRank' => 21147),
            '金融学(FRM方向)' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 21773, 'MinRank' => 22433),
            '保险学(精算方向)' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 34253, 'MinRank' => 35109),
            '精算学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 22434, 'MinRank' => 23055),
            '金融科技' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 26441, 'MinRank' => 27183),
            '国际经济与贸易(BA方向)' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 30258, 'MinRank' => 31080),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 29457, 'MinRank' => 30257),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 44008, 'MinRank' => 44969),
            '法学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 16973, 'MinRank' => 17561),
            '法学(法务会计)' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 18664, 'MinRank' => 19278),
            '法学(数据法学)' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 19894, 'MinRank' => 20511),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 25722, 'MinRank' => 26440),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 19279, 'MinRank' => 19893),
            '数据科学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 19894, 'MinRank' => 20511),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 16973, 'MinRank' => 17561),
            '软件工程' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 38491, 'MinRank' => 39432),
            '软件工程(VR软件开发)' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 44970, 'MinRank' => 45895),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 25722, 'MinRank' => 26440),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 21773, 'MinRank' => 22433),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 23056, 'MinRank' => 23707),
            '信息管理与信息系统(金融智能)' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 27184, 'MinRank' => 27901),
            '工程管理' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 42212, 'MinRank' => 43129),
            '工商管理(智能商务)' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 39433, 'MinRank' => 40370),
            '市场营销(数字营销)' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 51877, 'MinRank' => 52953),
            '市场营销(国际营销)' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 60450, 'MinRank' => 61567),
            '会计学(国际会计)' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 21773, 'MinRank' => 22433),
            '会计学' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 15951, 'MinRank' => 16453),
            '会计学(注册会计师)' => array('Num' => 0, 'MaxScore' => 600,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 15388, 'MinRank' => 15950),
            '会计学(CIMA方向)' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 18664, 'MinRank' => 19278),
            '会计学(ACCA方向)' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 15951, 'MinRank' => 16453),
            '财务管理' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 18112, 'MinRank' => 18663),
            '人力资源管理(数智人力)' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 40371, 'MinRank' => 41291),
            '行政管理(数字政务)' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 44970, 'MinRank' => 45895),
            '电子商务' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 40371, 'MinRank' => 41291),
            '数字经济(中外合作办学)' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 46812, 'MinRank' => 47783),
            '软件工程(中外合作办学)' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 45896, 'MinRank' => 46811)
        )
    ),
    '河南' => array(
        '文科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 6768, 'MinRank' => 7002),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 7719, 'MinRank' => 7940),
            '金融学（CFA 方向）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 7003, 'MinRank' => 7217),
            '国际经济与贸易（BA 方向）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 8194, 'MinRank' => 8497),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 6516, 'MinRank' => 6767),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 7470, 'MinRank' => 7718),
            '财政学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 5677, 'MinRank' => 5879),
            '税收学' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 7470, 'MinRank' => 7718),
            '会计学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 4710, 'MinRank' => 4869),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 5469, 'MinRank' => 5676),
            '会计学（CIMA）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 6089, 'MinRank' => 6284),
            '会计学（ACCA）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 6768, 'MinRank' => 7002),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 6089, 'MinRank' => 6284),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 7003, 'MinRank' => 7217),
            '金融学' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 6768, 'MinRank' => 7002),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 7003, 'MinRank' => 7217),
            '金融学（FRM 方向）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 7218, 'MinRank' => 7469),
            '法学' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 5880, 'MinRank' => 6088),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 6089, 'MinRank' => 6284),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 6089, 'MinRank' => 6284),
            '社会工作' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 7218, 'MinRank' => 7469),
            '新闻学' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 7719, 'MinRank' => 7940),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 6768, 'MinRank' => 7002)
        ),
        '理科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 49567, 'MinRank' => 50642),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 48595, 'MinRank' => 49566),
            '金融学（CFA 方向）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 56190, 'MinRank' => 57281),
            '国际经济与贸易（BA 方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 49567, 'MinRank' => 50642),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 51687, 'MinRank' => 52721),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 53910, 'MinRank' => 55035),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 59580, 'MinRank' => 60745),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 44464, 'MinRank' => 45456),
            '税收学' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 50643, 'MinRank' => 51686),
            '财务管理' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 53910, 'MinRank' => 55035),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 39606, 'MinRank' => 40541),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 49567, 'MinRank' => 50642),
            '会计学（ACCA）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 41510, 'MinRank' => 42445),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 52722, 'MinRank' => 53909),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 56190, 'MinRank' => 57281),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 56190, 'MinRank' => 57281),
            '数字经济' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 56190, 'MinRank' => 57281),
            '金融学' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 58401, 'MinRank' => 59579),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 49567, 'MinRank' => 50642),
            '金融工程' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 51687, 'MinRank' => 52721),
            '金融科技' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 58401, 'MinRank' => 59579),
            '金融学（FRM 方向）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 51687, 'MinRank' => 52721),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 46514, 'MinRank' => 47548),
            '精算学' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 49567, 'MinRank' => 50642),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 48595, 'MinRank' => 49566),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 45457, 'MinRank' => 46513),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 57282, 'MinRank' => 58400),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 49567, 'MinRank' => 50642),
            '数据科学' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 55036, 'MinRank' => 56189),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 49567, 'MinRank' => 50642),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 58401, 'MinRank' => 59579),
            '工程管理' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 58401, 'MinRank' => 59579),
            '法学' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 34231, 'MinRank' => 35066),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 46514, 'MinRank' => 47548),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 35949, 'MinRank' => 36841),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 52722, 'MinRank' => 53909),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 57282, 'MinRank' => 58400),
            '商务英语' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 57282, 'MinRank' => 58400),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 56190, 'MinRank' => 57281),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 59580, 'MinRank' => 60745)
        )
    ),
    '海南' => array(
        '综合改革' => array(
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 689,  'MinScore' => 689, 'AvgScore' => 0, 'MaxRank' => 2194, 'MinRank' => 2243),
            '会计学' => array('Num' => 0, 'MaxScore' => 666,  'MinScore' => 666, 'AvgScore' => 0, 'MaxRank' => 3617, 'MinRank' => 3691),
            '财政学' => array('Num' => 0, 'MaxScore' => 659,  'MinScore' => 659, 'AvgScore' => 0, 'MaxRank' => 4173, 'MinRank' => 4256),
            '税收学' => array('Num' => 0, 'MaxScore' => 659,  'MinScore' => 659, 'AvgScore' => 0, 'MaxRank' => 4173, 'MinRank' => 4256),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 645,  'MinScore' => 645, 'AvgScore' => 0, 'MaxRank' => 5490, 'MinRank' => 5610),
            '新闻学' => array('Num' => 0, 'MaxScore' => 648,  'MinScore' => 648, 'AvgScore' => 0, 'MaxRank' => 5169, 'MinRank' => 5279),
            '商务英语' => array('Num' => 0, 'MaxScore' => 637,  'MinScore' => 637, 'AvgScore' => 0, 'MaxRank' => 6369, 'MinRank' => 6498),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 665,  'MinScore' => 665, 'AvgScore' => 0, 'MaxRank' => 3692, 'MinRank' => 3764),
            '法学' => array('Num' => 0, 'MaxScore' => 657,  'MinScore' => 657, 'AvgScore' => 0, 'MaxRank' => 4331, 'MinRank' => 4421),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 656,  'MinScore' => 656, 'AvgScore' => 0, 'MaxRank' => 4422, 'MinRank' => 4510),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 657,  'MinScore' => 657, 'AvgScore' => 0, 'MaxRank' => 4331, 'MinRank' => 4421),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 656,  'MinScore' => 656, 'AvgScore' => 0, 'MaxRank' => 4422, 'MinRank' => 4510),
            '金融学' => array('Num' => 0, 'MaxScore' => 655,  'MinScore' => 655, 'AvgScore' => 0, 'MaxRank' => 4511, 'MinRank' => 4593),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 651,  'MinScore' => 651, 'AvgScore' => 0, 'MaxRank' => 4885, 'MinRank' => 4974),
            '财务管理' => array('Num' => 0, 'MaxScore' => 651,  'MinScore' => 651, 'AvgScore' => 0, 'MaxRank' => 4885, 'MinRank' => 4974),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 648,  'MinScore' => 648, 'AvgScore' => 0, 'MaxRank' => 5169, 'MinRank' => 5279),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 644,  'MinScore' => 644, 'AvgScore' => 0, 'MaxRank' => 5611, 'MinRank' => 5701),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 643,  'MinScore' => 643, 'AvgScore' => 0, 'MaxRank' => 5702, 'MinRank' => 5793),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 639,  'MinScore' => 639, 'AvgScore' => 0, 'MaxRank' => 6128, 'MinRank' => 6231),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 638,  'MinScore' => 637, 'AvgScore' => 0, 'MaxRank' => 6369, 'MinRank' => 6498),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 639,  'MinScore' => 639, 'AvgScore' => 0, 'MaxRank' => 6128, 'MinRank' => 6231),
            '电子商务' => array('Num' => 0, 'MaxScore' => 636,  'MinScore' => 636, 'AvgScore' => 0, 'MaxRank' => 6499, 'MinRank' => 6586),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 637,  'MinScore' => 637, 'AvgScore' => 0, 'MaxRank' => 6369, 'MinRank' => 6498),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 636,  'MinScore' => 636, 'AvgScore' => 0, 'MaxRank' => 6499, 'MinRank' => 6586),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 635,  'MinScore' => 635, 'AvgScore' => 0, 'MaxRank' => 6587, 'MinRank' => 6726),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 635,  'MinScore' => 635, 'AvgScore' => 0, 'MaxRank' => 6587, 'MinRank' => 6726),
            '社会工作' => array('Num' => 0, 'MaxScore' => 634,  'MinScore' => 634, 'AvgScore' => 0, 'MaxRank' => 6727, 'MinRank' => 6830),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 666,  'MinScore' => 666, 'AvgScore' => 0, 'MaxRank' => 3617, 'MinRank' => 3691),
            '数字经济' => array('Num' => 0, 'MaxScore' => 656,  'MinScore' => 656, 'AvgScore' => 0, 'MaxRank' => 4422, 'MinRank' => 4510),
            '金融科技' => array('Num' => 0, 'MaxScore' => 654,  'MinScore' => 654, 'AvgScore' => 0, 'MaxRank' => 4594, 'MinRank' => 4713),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 642,  'MinScore' => 642, 'AvgScore' => 0, 'MaxRank' => 5794, 'MinRank' => 5905),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 622,  'MinScore' => 622, 'AvgScore' => 0, 'MaxRank' => 8296, 'MinRank' => 8436),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 608,  'MinScore' => 608, 'AvgScore' => 0, 'MaxRank' => 10438, 'MinRank' => 10596),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 610,  'MinScore' => 610, 'AvgScore' => 0, 'MaxRank' => 10111, 'MinRank' => 10279),
            '数据科学' => array('Num' => 0, 'MaxScore' => 617,  'MinScore' => 617, 'AvgScore' => 0, 'MaxRank' => 9023, 'MinRank' => 9159),
            '软件工程' => array('Num' => 0, 'MaxScore' => 619,  'MinScore' => 607, 'AvgScore' => 0, 'MaxRank' => 10597, 'MinRank' => 10761),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 617,  'MinScore' => 605, 'AvgScore' => 0, 'MaxRank' => 10953, 'MinRank' => 11138),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 605,  'MinScore' => 605, 'AvgScore' => 0, 'MaxRank' => 10953, 'MinRank' => 11138),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 14507, 'MinRank' => 14706)
        )
    ),
    '湖北' => array(
        '历史组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 4121, 'MinRank' => 4232),
            '法学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 4013, 'MinRank' => 4120),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 4013, 'MinRank' => 4120),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 4362, 'MinRank' => 4503),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 4233, 'MinRank' => 4361),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 4362, 'MinRank' => 4503),
            '会计学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 3885, 'MinRank' => 4012),
            '财务管理' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 4233, 'MinRank' => 4361),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 4504, 'MinRank' => 4652),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 4790, 'MinRank' => 4923),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 4653, 'MinRank' => 4789),
            '税收学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 4504, 'MinRank' => 4652),
            '金融学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 3885, 'MinRank' => 4012),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 5060, 'MinRank' => 5193),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 4653, 'MinRank' => 4789),
            '社会工作' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 6644, 'MinRank' => 6816),
            '商务英语' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 8068, 'MinRank' => 8240),
            '新闻学' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 8068, 'MinRank' => 8240),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 5495, 'MinRank' => 5644),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 6644, 'MinRank' => 6816),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 5798, 'MinRank' => 5973),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 6817, 'MinRank' => 6995),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 6325, 'MinRank' => 6489),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 6490, 'MinRank' => 6643),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 5194, 'MinRank' => 5332),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 5974, 'MinRank' => 6159)
        ),
        '物理组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 602, 'AvgScore' => 0, 'MaxRank' => 16231, 'MinRank' => 16685),
            '金融学' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 20494, 'MinRank' => 20986),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 20494, 'MinRank' => 20986),
            '法学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 20987, 'MinRank' => 21511),
            '数字经济（跨学科）' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 27592, 'MinRank' => 28232),
            '金融科技（跨学科交叉）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 28233, 'MinRank' => 28901),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 24682, 'MinRank' => 25224),
            '精算学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 23597, 'MinRank' => 24132),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 28233, 'MinRank' => 28901),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 25793, 'MinRank' => 26392),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 30714, 'MinRank' => 31351),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 20987, 'MinRank' => 21511),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 28233, 'MinRank' => 28901),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 33270, 'MinRank' => 33957),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 25793, 'MinRank' => 26392),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 30081, 'MinRank' => 30713),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 31352, 'MinRank' => 31969),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 29463, 'MinRank' => 30080),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 31970, 'MinRank' => 32613),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 31352, 'MinRank' => 31969),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 28902, 'MinRank' => 29462),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 30081, 'MinRank' => 30713),
            '数据科学' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 26992, 'MinRank' => 27591),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 26393, 'MinRank' => 26991),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 30081, 'MinRank' => 30713),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 28902, 'MinRank' => 29462),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 26992, 'MinRank' => 27591),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 19538, 'MinRank' => 20005),
            '软件工程（高收费）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 33270, 'MinRank' => 33957),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 33270, 'MinRank' => 33957),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 31970, 'MinRank' => 32613)
        )
    ),
    '黑龙江' => array(
        '历史组' => array(
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 1478, 'MinRank' => 1533),
            '国民经济管理（数字化治和投资管理）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 1937, 'MinRank' => 1981),
            '财政学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 2032, 'MinRank' => 2101),
            '税收学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 1888, 'MinRank' => 1936),
            '金融学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 2205, 'MinRank' => 2267),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 2032, 'MinRank' => 2101),
            '法学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 1478, 'MinRank' => 1533),
            '会计学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 1271, 'MinRank' => 1315),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 606,  'MinScore' => 606, 'AvgScore' => 0, 'MaxRank' => 962, 'MinRank' => 989),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 1653, 'MinRank' => 1696),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 1478, 'MinRank' => 1533),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 1888, 'MinRank' => 1936),
            '商务英语' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 4091, 'MinRank' => 4182)
        ),
        '物理组' => array(
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 12324, 'MinRank' => 12527),
            '税收学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 10047, 'MinRank' => 10251),
            '金融学' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 14197, 'MinRank' => 14419),
            '会计学' => array('Num' => 0, 'MaxScore' => 604,  'MinScore' => 604, 'AvgScore' => 0, 'MaxRank' => 7842, 'MinRank' => 8005),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 9827, 'MinRank' => 10046),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 9627, 'MinRank' => 9826),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 606,  'MinScore' => 606, 'AvgScore' => 0, 'MaxRank' => 7492, 'MinRank' => 7657),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 13752, 'MinRank' => 13972),
            '数字经济' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 14420, 'MinRank' => 14683),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 10443, 'MinRank' => 10643),
            '金融科技' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 13545, 'MinRank' => 13751),
            '新闻学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 14684, 'MinRank' => 14906),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 14907, 'MinRank' => 15152),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 13973, 'MinRank' => 14196),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 9827, 'MinRank' => 10046),
            '财务管理' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 10047, 'MinRank' => 10251),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 15614, 'MinRank' => 15839),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 11694, 'MinRank' => 11885),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 11886, 'MinRank' => 12112),
            '软件工程' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 15840, 'MinRank' => 16061),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 16062, 'MinRank' => 16309),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 13752, 'MinRank' => 13972),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 13321, 'MinRank' => 13544),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 14197, 'MinRank' => 14419)
        )
    ),
    '吉林' => array(
        '历史组' => array(
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 1371, 'MinRank' => 1411),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 1844, 'MinRank' => 1887),
            '财政学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 1494, 'MinRank' => 1536),
            '财务管理' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 1337, 'MinRank' => 1370),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 1337, 'MinRank' => 1370),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 1412, 'MinRank' => 1447),
            '法学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 1591, 'MinRank' => 1641),
            '商务英语' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 1686, 'MinRank' => 1749),
            '新闻学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 1686, 'MinRank' => 1749),
            '税收学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 1591, 'MinRank' => 1641)
        ),
        '物理组' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 9687, 'MinRank' => 9872),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 9687, 'MinRank' => 9872),
            '会计学' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 10350, 'MinRank' => 10528),
            '会计学（ACCA）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 9551, 'MinRank' => 9686),
            '数字经济' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 12956, 'MinRank' => 13163),
            '金融科技' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 12956, 'MinRank' => 13163),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 12601, 'MinRank' => 12795),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 10930, 'MinRank' => 11120),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 10529, 'MinRank' => 10739),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 11469, 'MinRank' => 11666),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 13367, 'MinRank' => 13559),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 13367, 'MinRank' => 13559),
            '税收学' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 11292, 'MinRank' => 11468),
            '社会工作' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 12415, 'MinRank' => 12600),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 14162, 'MinRank' => 14354),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 10529, 'MinRank' => 10739),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 12415, 'MinRank' => 12600),
            '软件工程' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 12601, 'MinRank' => 12795),
            '数据科学' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 12956, 'MinRank' => 13163),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 537,  'MinScore' => 537, 'AvgScore' => 0, 'MaxRank' => 17417, 'MinRank' => 17641)
        )
    ),
    '江苏' => array(
        '历史组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 6169, 'MinRank' => 6398),
            '法学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 6169, 'MinRank' => 6398),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 4944, 'MinRank' => 5138),
            '人力资源管理' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 7576, 'MinRank' => 7859),
            '税收学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 8109, 'MinRank' => 8377),
            '会计学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 7093, 'MinRank' => 7329),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 8656, 'MinRank' => 8946),
            '金融学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 8109, 'MinRank' => 8377),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 8378, 'MinRank' => 8655),
            '新闻学' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 8656, 'MinRank' => 8946),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 8378, 'MinRank' => 8655),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 9799, 'MinRank' => 10080),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 9223, 'MinRank' => 9484),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 9223, 'MinRank' => 9484),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 9799, 'MinRank' => 10080),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 7860, 'MinRank' => 8108),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 8378, 'MinRank' => 8655),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 9799, 'MinRank' => 10080),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 8109, 'MinRank' => 8377)
        ),
        '物理组' => array(
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 58418, 'MinRank' => 59522),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 41691, 'MinRank' => 42593),
            '税收学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 45390, 'MinRank' => 46287),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 53204, 'MinRank' => 54263),
            '经济学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 45390, 'MinRank' => 46287),
            '金融科技' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 52210, 'MinRank' => 53203),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 50218, 'MinRank' => 51190),
            '精算学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 47278, 'MinRank' => 48269),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 52210, 'MinRank' => 53203),
            '数字经济' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 51191, 'MinRank' => 52209),
            '财政学' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 34820, 'MinRank' => 35656),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 33981, 'MinRank' => 34819),
            '金融学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 38211, 'MinRank' => 39109),
            '人力资源管理' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 55259, 'MinRank' => 56323),
            '会计学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 51191, 'MinRank' => 52209),
            '财务管理' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 54264, 'MinRank' => 55258),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 40817, 'MinRank' => 41690),
            '信息管理与信息系统' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 54264, 'MinRank' => 55258),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 54264, 'MinRank' => 55258),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 49219, 'MinRank' => 50217),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 51191, 'MinRank' => 52209),
            '金融学（CFA）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 47278, 'MinRank' => 48269),
            '国际经济与贸易（BA）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 53204, 'MinRank' => 54263),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 50218, 'MinRank' => 51190),
            '会计学（CIMA)' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 34820, 'MinRank' => 35656),
            '会计学（ACCA)' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 34820, 'MinRank' => 35656),
            '金融学（FRM)' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 50218, 'MinRank' => 51190),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 53204, 'MinRank' => 54263),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 63763, 'MinRank' => 64886),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 35657, 'MinRank' => 36502),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 53204, 'MinRank' => 54263),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 60585, 'MinRank' => 61604),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 57399, 'MinRank' => 58417),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 63763, 'MinRank' => 64886),
            '数据科学' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 61605, 'MinRank' => 62680),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 58418, 'MinRank' => 59522),
            '软件工程' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 65950, 'MinRank' => 67047),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 63763, 'MinRank' => 64886),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 68149, 'MinRank' => 69269)
        )
    ),
    '辽宁' => array(
        '历史组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 2262, 'MinRank' => 2325),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 3998, 'MinRank' => 4092),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 601, 'AvgScore' => 0, 'MaxRank' => 1843, 'MinRank' => 1898),
            '电子商务' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 5239, 'MinRank' => 5347),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 4093, 'MinRank' => 4174),
            '会计学' => array('Num' => 0, 'MaxScore' => 606,  'MinScore' => 606, 'AvgScore' => 0, 'MaxRank' => 1588, 'MinRank' => 1646),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 3918, 'MinRank' => 3997),
            '金融学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 2751, 'MinRank' => 2813),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 3415, 'MinRank' => 3498),
            '税收学' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 2140, 'MinRank' => 2206),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 2140, 'MinRank' => 2206)
        ),
        '物理组' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 591, 'AvgScore' => 0, 'MaxRank' => 16929, 'MinRank' => 17258),
            '会计学' => array('Num' => 0, 'MaxScore' => 621,  'MinScore' => 621, 'AvgScore' => 0, 'MaxRank' => 8929, 'MinRank' => 9136),
            '金融学' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 17855, 'MinRank' => 18197),
            '税收学' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 15455, 'MinRank' => 15769),
            '国际商务' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 32660, 'MinRank' => 33055),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 21120, 'MinRank' => 21450),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 608,  'MinScore' => 608, 'AvgScore' => 0, 'MaxRank' => 12191, 'MinRank' => 12461),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 538,  'MinScore' => 538, 'AvgScore' => 0, 'MaxRank' => 35950, 'MinRank' => 36372),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 30338, 'MinRank' => 30736),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 542,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 34288, 'MinRank' => 34713),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 17855, 'MinRank' => 18197),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 606,  'MinScore' => 606, 'AvgScore' => 0, 'MaxRank' => 12732, 'MinRank' => 12990),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 612,  'MinScore' => 612, 'AvgScore' => 0, 'MaxRank' => 11123, 'MinRank' => 11411),
            '金融科技' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 21120, 'MinRank' => 21450),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 15455, 'MinRank' => 15769),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 17259, 'MinRank' => 17554),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 17855, 'MinRank' => 18197),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 18831, 'MinRank' => 19126),
            '软件工程' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 17555, 'MinRank' => 17854),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 17855, 'MinRank' => 18197),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 17555, 'MinRank' => 17854),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 538,  'MinScore' => 538, 'AvgScore' => 0, 'MaxRank' => 35950, 'MinRank' => 36372),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 32285, 'MinRank' => 32659)
        )
    ),
    '内蒙古自治区' => array(
        '文科' => array(
            '金融学' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 1623, 'MinRank' => 1675),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 523,  'MinScore' => 523, 'AvgScore' => 0, 'MaxRank' => 3261, 'MinRank' => 3324),
            '税收学' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 1527, 'MinRank' => 1570),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 975, 'MinRank' => 1011),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 514,  'MinScore' => 514, 'AvgScore' => 0, 'MaxRank' => 3909, 'MinRank' => 3990),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 519,  'MinScore' => 519, 'AvgScore' => 0, 'MaxRank' => 3540, 'MinRank' => 3611),
            '社会工作' => array('Num' => 0, 'MaxScore' => 506,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 4579, 'MinRank' => 4660),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 1963, 'MinRank' => 2020),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 518,  'MinScore' => 518, 'AvgScore' => 0, 'MaxRank' => 3612, 'MinRank' => 3704),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 1868, 'MinRank' => 1914)
        ),
        '理科' => array(
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 530,  'MinScore' => 530, 'AvgScore' => 0, 'MaxRank' => 14727, 'MinRank' => 14923),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 548,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 11330, 'MinRank' => 11500),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 516,  'MinScore' => 516, 'AvgScore' => 0, 'MaxRank' => 17621, 'MinRank' => 17839),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 9317, 'MinRank' => 9479),
            '税收学' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 10144, 'MinRank' => 10298),
            '会计学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 7702, 'MinRank' => 7858),
            '财务管理' => array('Num' => 0, 'MaxScore' => 548,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 11330, 'MinRank' => 11500),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 8127, 'MinRank' => 8271),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 550,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 10989, 'MinRank' => 11150),
            '数字经济' => array('Num' => 0, 'MaxScore' => 512,  'MinScore' => 512, 'AvgScore' => 0, 'MaxRank' => 18497, 'MinRank' => 18725),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 512,  'MinScore' => 512, 'AvgScore' => 0, 'MaxRank' => 18497, 'MinRank' => 18725),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 535,  'MinScore' => 535, 'AvgScore' => 0, 'MaxRank' => 13740, 'MinRank' => 13944),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 11890, 'MinRank' => 12093),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 518,  'MinScore' => 518, 'AvgScore' => 0, 'MaxRank' => 17202, 'MinRank' => 17415),
            '工程管理（数字基建管理）' => array('Num' => 0, 'MaxScore' => 510,  'MinScore' => 510, 'AvgScore' => 0, 'MaxRank' => 18974, 'MinRank' => 19190),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 499,  'MinScore' => 499, 'AvgScore' => 0, 'MaxRank' => 21427, 'MinRank' => 21671),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 542,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 12451, 'MinRank' => 12627),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 520,  'MinScore' => 520, 'AvgScore' => 0, 'MaxRank' => 16741, 'MinRank' => 16980),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 502,  'MinScore' => 502, 'AvgScore' => 0, 'MaxRank' => 20766, 'MinRank' => 20989),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 7983, 'MinRank' => 8126),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 476,  'MinScore' => 476, 'AvgScore' => 0, 'MaxRank' => 27295, 'MinRank' => 27541),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 535,  'MinScore' => 535, 'AvgScore' => 0, 'MaxRank' => 13740, 'MinRank' => 13944)
        )
    ),
    '宁夏回族自治区' => array(
        '文科' => array(
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 922, 'MinRank' => 950),
            '税收学' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 922, 'MinRank' => 950),
            '会计学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 525, 'MinRank' => 540),
            '财务管理' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 751, 'MinRank' => 785),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 550,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 975, 'MinRank' => 999)
        ),
        '理科' => array(
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 497,  'MinScore' => 497, 'AvgScore' => 0, 'MaxRank' => 5139, 'MinRank' => 5244),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 453,  'MinScore' => 453, 'AvgScore' => 0, 'MaxRank' => 10449, 'MinRank' => 10598),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 453,  'MinScore' => 453, 'AvgScore' => 0, 'MaxRank' => 10449, 'MinRank' => 10598),
            '数字经济' => array('Num' => 0, 'MaxScore' => 466,  'MinScore' => 466, 'AvgScore' => 0, 'MaxRank' => 8566, 'MinRank' => 8687),
            '金融学' => array('Num' => 0, 'MaxScore' => 506,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 4403, 'MinRank' => 4475),
            '金融科技' => array('Num' => 0, 'MaxScore' => 443,  'MinScore' => 443, 'AvgScore' => 0, 'MaxRank' => 12142, 'MinRank' => 12278),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 499,  'MinScore' => 499, 'AvgScore' => 0, 'MaxRank' => 4967, 'MinRank' => 5046),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 463,  'MinScore' => 463, 'AvgScore' => 0, 'MaxRank' => 8961, 'MinRank' => 9101),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 450,  'MinScore' => 450, 'AvgScore' => 0, 'MaxRank' => 10914, 'MinRank' => 11095),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 471,  'MinScore' => 471, 'AvgScore' => 0, 'MaxRank' => 7934, 'MinRank' => 8067)
        )
    ),
    '青海' => array(
        '文科' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 506,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 758, 'MinRank' => 774),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 486,  'MinScore' => 486, 'AvgScore' => 0, 'MaxRank' => 1225, 'MinRank' => 1251),
            '税收学' => array('Num' => 0, 'MaxScore' => 499,  'MinScore' => 499, 'AvgScore' => 0, 'MaxRank' => 909, 'MinRank' => 931),
            '金融学' => array('Num' => 0, 'MaxScore' => 488,  'MinScore' => 488, 'AvgScore' => 0, 'MaxRank' => 1177, 'MinRank' => 1196),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 484,  'MinScore' => 484, 'AvgScore' => 0, 'MaxRank' => 1287, 'MinRank' => 1307),
            '法学' => array('Num' => 0, 'MaxScore' => 497,  'MinScore' => 493, 'AvgScore' => 0, 'MaxRank' => 1052, 'MinRank' => 1073),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 472,  'MinScore' => 472, 'AvgScore' => 0, 'MaxRank' => 1649, 'MinRank' => 1683),
            '会计学' => array('Num' => 0, 'MaxScore' => 511,  'MinScore' => 511, 'AvgScore' => 0, 'MaxRank' => 654, 'MinRank' => 671),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 466,  'MinScore' => 466, 'AvgScore' => 0, 'MaxRank' => 1853, 'MinRank' => 1881)
        ),
        '理科' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 451,  'MinScore' => 451, 'AvgScore' => 0, 'MaxRank' => 4456, 'MinRank' => 4543),
            '税收学' => array('Num' => 0, 'MaxScore' => 443,  'MinScore' => 443, 'AvgScore' => 0, 'MaxRank' => 5084, 'MinRank' => 5163),
            '金融学' => array('Num' => 0, 'MaxScore' => 438,  'MinScore' => 438, 'AvgScore' => 0, 'MaxRank' => 5443, 'MinRank' => 5531),
            '会计学' => array('Num' => 0, 'MaxScore' => 467,  'MinScore' => 467, 'AvgScore' => 0, 'MaxRank' => 3434, 'MinRank' => 3498),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 421,  'MinScore' => 421, 'AvgScore' => 0, 'MaxRank' => 6922, 'MinRank' => 7014),
            '数字经济' => array('Num' => 0, 'MaxScore' => 407,  'MinScore' => 407, 'AvgScore' => 0, 'MaxRank' => 8472, 'MinRank' => 8588),
            '精算学' => array('Num' => 0, 'MaxScore' => 439,  'MinScore' => 439, 'AvgScore' => 0, 'MaxRank' => 5375, 'MinRank' => 5442),
            '金融科技' => array('Num' => 0, 'MaxScore' => 432,  'MinScore' => 432, 'AvgScore' => 0, 'MaxRank' => 5926, 'MinRank' => 6003),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 435,  'MinScore' => 435, 'AvgScore' => 0, 'MaxRank' => 5696, 'MinRank' => 5771),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 433,  'MinScore' => 433, 'AvgScore' => 0, 'MaxRank' => 5841, 'MinRank' => 5925),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 453,  'MinScore' => 453, 'AvgScore' => 0, 'MaxRank' => 4326, 'MinRank' => 4395),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 431,  'MinScore' => 431, 'AvgScore' => 0, 'MaxRank' => 6004, 'MinRank' => 6091),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 462,  'MinScore' => 462, 'AvgScore' => 0, 'MaxRank' => 3750, 'MinRank' => 3824),
            '财务管理' => array('Num' => 0, 'MaxScore' => 458,  'MinScore' => 458, 'AvgScore' => 0, 'MaxRank' => 3992, 'MinRank' => 4060),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 418,  'MinScore' => 418, 'AvgScore' => 0, 'MaxRank' => 7243, 'MinRank' => 7365)
        )
    ),
    '上海市' => array(
        '综合改革' => array(
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 516,  'MinScore' => 516, 'AvgScore' => 0, 'MaxRank' => 15250, 'MinRank' => 15485),
            '财务管理' => array('Num' => 0, 'MaxScore' => 518,  'MinScore' => 518, 'AvgScore' => 0, 'MaxRank' => 14754, 'MinRank' => 15023),
            '财政学' => array('Num' => 0, 'MaxScore' => 517,  'MinScore' => 517, 'AvgScore' => 0, 'MaxRank' => 15024, 'MinRank' => 15249),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 508,  'MinScore' => 508, 'AvgScore' => 0, 'MaxRank' => 17314, 'MinRank' => 17567),
            '法学' => array('Num' => 0, 'MaxScore' => 494,  'MinScore' => 494, 'AvgScore' => 0, 'MaxRank' => 20694, 'MinRank' => 20956),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 511,  'MinScore' => 511, 'AvgScore' => 0, 'MaxRank' => 16484, 'MinRank' => 16761),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 524,  'MinScore' => 513, 'AvgScore' => 0, 'MaxRank' => 15980, 'MinRank' => 16250),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 515,  'MinScore' => 515, 'AvgScore' => 0, 'MaxRank' => 15486, 'MinRank' => 15734),
            '会计学' => array('Num' => 0, 'MaxScore' => 498,  'MinScore' => 498, 'AvgScore' => 0, 'MaxRank' => 19730, 'MinRank' => 19960),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 513,  'MinScore' => 511, 'AvgScore' => 0, 'MaxRank' => 16484, 'MinRank' => 16761),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 514,  'MinScore' => 514, 'AvgScore' => 0, 'MaxRank' => 15735, 'MinRank' => 15979),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 505,  'MinScore' => 498, 'AvgScore' => 0, 'MaxRank' => 19730, 'MinRank' => 19960),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 515,  'MinScore' => 497, 'AvgScore' => 0, 'MaxRank' => 19961, 'MinRank' => 20203),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 511,  'MinScore' => 511, 'AvgScore' => 0, 'MaxRank' => 16484, 'MinRank' => 16761),
            '金融工程' => array('Num' => 0, 'MaxScore' => 510,  'MinScore' => 510, 'AvgScore' => 0, 'MaxRank' => 16762, 'MinRank' => 17049),
            '金融科技' => array('Num' => 0, 'MaxScore' => 519,  'MinScore' => 519, 'AvgScore' => 0, 'MaxRank' => 14533, 'MinRank' => 14753),
            '金融学' => array('Num' => 0, 'MaxScore' => 501,  'MinScore' => 494, 'AvgScore' => 0, 'MaxRank' => 20694, 'MinRank' => 20956),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 526,  'MinScore' => 510, 'AvgScore' => 0, 'MaxRank' => 16762, 'MinRank' => 17049),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 520,  'MinScore' => 503, 'AvgScore' => 0, 'MaxRank' => 18540, 'MinRank' => 18767),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 511,  'MinScore' => 501, 'AvgScore' => 0, 'MaxRank' => 19009, 'MinRank' => 19243),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 499,  'MinScore' => 499, 'AvgScore' => 0, 'MaxRank' => 19487, 'MinRank' => 19729),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 506,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 17796, 'MinRank' => 18067),
            '精算学' => array('Num' => 0, 'MaxScore' => 506,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 17796, 'MinRank' => 18067),
            '软件工程' => array('Num' => 0, 'MaxScore' => 535,  'MinScore' => 493, 'AvgScore' => 0, 'MaxRank' => 20957, 'MinRank' => 21226),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 509,  'MinScore' => 502, 'AvgScore' => 0, 'MaxRank' => 18768, 'MinRank' => 19008),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 494,  'MinScore' => 494, 'AvgScore' => 0, 'MaxRank' => 20694, 'MinRank' => 20956),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 517,  'MinScore' => 517, 'AvgScore' => 0, 'MaxRank' => 15024, 'MinRank' => 15249),
            '数据科学' => array('Num' => 0, 'MaxScore' => 501,  'MinScore' => 501, 'AvgScore' => 0, 'MaxRank' => 19009, 'MinRank' => 19243),
            '数字经济' => array('Num' => 0, 'MaxScore' => 486,  'MinScore' => 486, 'AvgScore' => 0, 'MaxRank' => 22782, 'MinRank' => 23040),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 511,  'MinScore' => 499, 'AvgScore' => 0, 'MaxRank' => 19487, 'MinRank' => 19729),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 511,  'MinScore' => 511, 'AvgScore' => 0, 'MaxRank' => 16484, 'MinRank' => 16761),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 513,  'MinScore' => 513, 'AvgScore' => 0, 'MaxRank' => 15980, 'MinRank' => 16250),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 503,  'MinScore' => 503, 'AvgScore' => 0, 'MaxRank' => 18540, 'MinRank' => 18767),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 511,  'MinScore' => 511, 'AvgScore' => 0, 'MaxRank' => 16484, 'MinRank' => 16761),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 515,  'MinScore' => 515, 'AvgScore' => 0, 'MaxRank' => 15486, 'MinRank' => 15734)
        )
    ),
    '山西' => array(
        '文科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 4158, 'MinRank' => 4277),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 541,  'MinScore' => 541, 'AvgScore' => 0, 'MaxRank' => 4158, 'MinRank' => 4277),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 551,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 3120, 'MinRank' => 3199),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 542,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 4064, 'MinRank' => 4157),
            '财政学' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 3296, 'MinRank' => 3389),
            '税收学' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 3200, 'MinRank' => 3295),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 534,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 4999, 'MinRank' => 5150),
            '会计学' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 2510, 'MinRank' => 2582),
            '财务管理' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 2855, 'MinRank' => 2954),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 1293, 'MinRank' => 1338),
            '会计学（CIMA）' => array('Num' => 0, 'MaxScore' => 538,  'MinScore' => 538, 'AvgScore' => 0, 'MaxRank' => 4488, 'MinRank' => 4635),
            '会计学（ACCA）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 2140, 'MinRank' => 2190),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 539,  'MinScore' => 539, 'AvgScore' => 0, 'MaxRank' => 4384, 'MinRank' => 4487),
            '电子商务' => array('Num' => 0, 'MaxScore' => 534,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 4999, 'MinRank' => 5150),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 3716, 'MinRank' => 3827),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 538,  'MinScore' => 538, 'AvgScore' => 0, 'MaxRank' => 4488, 'MinRank' => 4635),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 543,  'MinScore' => 543, 'AvgScore' => 0, 'MaxRank' => 3942, 'MinRank' => 4063),
            '金融学' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 2955, 'MinRank' => 3041),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 547,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 3499, 'MinRank' => 3604),
            '金融学（FRM 方向）' => array('Num' => 0, 'MaxScore' => 544,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 3828, 'MinRank' => 3941),
            '金融学（CFA 方向）' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 537, 'AvgScore' => 0, 'MaxRank' => 4636, 'MinRank' => 4764),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 534,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 4999, 'MinRank' => 5150),
            '法学' => array('Num' => 0, 'MaxScore' => 542,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 4064, 'MinRank' => 4157),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 2583, 'MinRank' => 2657),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 544,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 3828, 'MinRank' => 3941),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 2955, 'MinRank' => 3041)
        ),
        '理科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 20585, 'MinRank' => 20960),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 506,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 43631, 'MinRank' => 44176),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 530,  'MinScore' => 530, 'AvgScore' => 0, 'MaxRank' => 31640, 'MinRank' => 32116),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 516,  'MinScore' => 516, 'AvgScore' => 0, 'MaxRank' => 38404, 'MinRank' => 38871),
            '财政学' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 23367, 'MinRank' => 23764),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 506,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 43631, 'MinRank' => 44176),
            '税收学' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 29778, 'MinRank' => 30252),
            '财务管理' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 14381, 'MinRank' => 14701),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 13150, 'MinRank' => 13432),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 17748, 'MinRank' => 18068),
            '会计学（CIMA）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 15691, 'MinRank' => 16053),
            '会计学（ACCA）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 525, 'AvgScore' => 0, 'MaxRank' => 34013, 'MinRank' => 34494),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 523,  'MinScore' => 523, 'AvgScore' => 0, 'MaxRank' => 34945, 'MinRank' => 35415),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 512,  'MinScore' => 512, 'AvgScore' => 0, 'MaxRank' => 40468, 'MinRank' => 40977),
            '数字经济' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 43631, 'MinRank' => 44176),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 521,  'MinScore' => 521, 'AvgScore' => 0, 'MaxRank' => 35862, 'MinRank' => 36352),
            '金融学' => array('Num' => 0, 'MaxScore' => 515,  'MinScore' => 513, 'AvgScore' => 0, 'MaxRank' => 39935, 'MinRank' => 40467),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 514,  'MinScore' => 514, 'AvgScore' => 0, 'MaxRank' => 39382, 'MinRank' => 39934),
            '金融工程' => array('Num' => 0, 'MaxScore' => 530,  'MinScore' => 530, 'AvgScore' => 0, 'MaxRank' => 31640, 'MinRank' => 32116),
            '金融科技' => array('Num' => 0, 'MaxScore' => 519,  'MinScore' => 518, 'AvgScore' => 0, 'MaxRank' => 37402, 'MinRank' => 37899),
            '金融学（FRM 方向）' => array('Num' => 0, 'MaxScore' => 537,  'MinScore' => 537, 'AvgScore' => 0, 'MaxRank' => 28448, 'MinRank' => 28892),
            '金融学（CFA 方向）' => array('Num' => 0, 'MaxScore' => 522,  'MinScore' => 510, 'AvgScore' => 0, 'MaxRank' => 41508, 'MinRank' => 42029),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 506, 'AvgScore' => 0, 'MaxRank' => 43631, 'MinRank' => 44176),
            '精算学' => array('Num' => 0, 'MaxScore' => 554,  'MinScore' => 554, 'AvgScore' => 0, 'MaxRank' => 21367, 'MinRank' => 21757),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 19097, 'MinRank' => 19452),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 508, 'AvgScore' => 0, 'MaxRank' => 42568, 'MinRank' => 43131),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 541,  'MinScore' => 511, 'AvgScore' => 0, 'MaxRank' => 40978, 'MinRank' => 41507),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 520,  'MinScore' => 510, 'AvgScore' => 0, 'MaxRank' => 41508, 'MinRank' => 42029),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 523,  'MinScore' => 517, 'AvgScore' => 0, 'MaxRank' => 37900, 'MinRank' => 38403),
            '法学' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 18723, 'MinRank' => 19096),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 557,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 20212, 'MinRank' => 20584),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 20961, 'MinRank' => 21366),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 18723, 'MinRank' => 19096),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 526,  'MinScore' => 517, 'AvgScore' => 0, 'MaxRank' => 37900, 'MinRank' => 38403),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 518,  'MinScore' => 518, 'AvgScore' => 0, 'MaxRank' => 37402, 'MinRank' => 37899),
            '数据科学' => array('Num' => 0, 'MaxScore' => 519,  'MinScore' => 519, 'AvgScore' => 0, 'MaxRank' => 36887, 'MinRank' => 37401),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 519,  'MinScore' => 516, 'AvgScore' => 0, 'MaxRank' => 38404, 'MinRank' => 38871)
        )
    ),
    '陕西' => array(
        '文科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 2425, 'MinRank' => 2500),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 537,  'MinScore' => 537, 'AvgScore' => 0, 'MaxRank' => 4580, 'MinRank' => 4708),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 2501, 'MinRank' => 2578),
            '税收学' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 2425, 'MinRank' => 2500),
            '会计学' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 2005, 'MinRank' => 2066),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 1546, 'MinRank' => 1599),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 1874, 'MinRank' => 1944),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 1874, 'MinRank' => 1944),
            '国际商务（IPMP方向）' => array('Num' => 0, 'MaxScore' => 537,  'MinScore' => 537, 'AvgScore' => 0, 'MaxRank' => 4580, 'MinRank' => 4708),
            '电子商务' => array('Num' => 0, 'MaxScore' => 533,  'MinScore' => 533, 'AvgScore' => 0, 'MaxRank' => 5084, 'MinRank' => 5211),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 2925, 'MinRank' => 3018),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 533,  'MinScore' => 533, 'AvgScore' => 0, 'MaxRank' => 5084, 'MinRank' => 5211),
            '金融学' => array('Num' => 0, 'MaxScore' => 538,  'MinScore' => 538, 'AvgScore' => 0, 'MaxRank' => 4466, 'MinRank' => 4579),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 2067, 'MinRank' => 2119),
            '法学' => array('Num' => 0, 'MaxScore' => 530,  'MinScore' => 530, 'AvgScore' => 0, 'MaxRank' => 5467, 'MinRank' => 5609),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 536,  'MinScore' => 536, 'AvgScore' => 0, 'MaxRank' => 4709, 'MinRank' => 4856),
            '社会工作（数字社会治理）' => array('Num' => 0, 'MaxScore' => 525,  'MinScore' => 525, 'AvgScore' => 0, 'MaxRank' => 6172, 'MinRank' => 6335),
            '新闻学（经济新闻）' => array('Num' => 0, 'MaxScore' => 527,  'MinScore' => 527, 'AvgScore' => 0, 'MaxRank' => 5894, 'MinRank' => 6027),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 526,  'MinScore' => 526, 'AvgScore' => 0, 'MaxRank' => 6028, 'MinRank' => 6171),
            '国际商务' => array('Num' => 0, 'MaxScore' => 537,  'MinScore' => 537, 'AvgScore' => 0, 'MaxRank' => 4580, 'MinRank' => 4708),
            '社会工作' => array('Num' => 0, 'MaxScore' => 525,  'MinScore' => 525, 'AvgScore' => 0, 'MaxRank' => 6172, 'MinRank' => 6335),
            '新闻学' => array('Num' => 0, 'MaxScore' => 527,  'MinScore' => 527, 'AvgScore' => 0, 'MaxRank' => 5894, 'MinRank' => 6027)
        ),
        '理科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 520,  'MinScore' => 520, 'AvgScore' => 0, 'MaxRank' => 34698, 'MinRank' => 35164),
            '财政学' => array('Num' => 0, 'MaxScore' => 529,  'MinScore' => 529, 'AvgScore' => 0, 'MaxRank' => 30523, 'MinRank' => 30970),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 546,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 23841, 'MinRank' => 24185),
            '税收学' => array('Num' => 0, 'MaxScore' => 523,  'MinScore' => 523, 'AvgScore' => 0, 'MaxRank' => 33236, 'MinRank' => 33718),
            '会计学' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 13210, 'MinRank' => 13480),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 550,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 22450, 'MinRank' => 22801),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 542,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 25294, 'MinRank' => 25652),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 9840, 'MinRank' => 10036),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 523,  'MinScore' => 523, 'AvgScore' => 0, 'MaxRank' => 33236, 'MinRank' => 33718),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 532,  'MinScore' => 532, 'AvgScore' => 0, 'MaxRank' => 29229, 'MinRank' => 29684),
            '金融学' => array('Num' => 0, 'MaxScore' => 535,  'MinScore' => 535, 'AvgScore' => 0, 'MaxRank' => 27996, 'MinRank' => 28366),
            '金融科技' => array('Num' => 0, 'MaxScore' => 522,  'MinScore' => 522, 'AvgScore' => 0, 'MaxRank' => 33719, 'MinRank' => 34201),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 536,  'MinScore' => 536, 'AvgScore' => 0, 'MaxRank' => 27606, 'MinRank' => 27995),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 529,  'MinScore' => 526, 'AvgScore' => 0, 'MaxRank' => 31870, 'MinRank' => 32295),
            '精算学' => array('Num' => 0, 'MaxScore' => 542,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 25294, 'MinRank' => 25652),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 521,  'MinScore' => 521, 'AvgScore' => 0, 'MaxRank' => 34202, 'MinRank' => 34697),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 527, 'AvgScore' => 0, 'MaxRank' => 31437, 'MinRank' => 31869),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 526,  'MinScore' => 523, 'AvgScore' => 0, 'MaxRank' => 33236, 'MinRank' => 33718),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 521,  'MinScore' => 521, 'AvgScore' => 0, 'MaxRank' => 34202, 'MinRank' => 34697),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 542,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 25294, 'MinRank' => 25652),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 520,  'MinScore' => 520, 'AvgScore' => 0, 'MaxRank' => 34698, 'MinRank' => 35164),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 534,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 28367, 'MinRank' => 28777),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 522,  'MinScore' => 519, 'AvgScore' => 0, 'MaxRank' => 35165, 'MinRank' => 35651),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 519,  'MinScore' => 519, 'AvgScore' => 0, 'MaxRank' => 35165, 'MinRank' => 35651),
            '数字经济' => array('Num' => 0, 'MaxScore' => 527,  'MinScore' => 523, 'AvgScore' => 0, 'MaxRank' => 33236, 'MinRank' => 33718)
        )
    ),
    '山东' => array(
        '综合改革' => array(
            '财政学' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 26046, 'MinRank' => 26778),
            '法学' => array('Num' => 0, 'MaxScore' => 600,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 21859, 'MinRank' => 22548),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 23202, 'MinRank' => 23889),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 41758, 'MinRank' => 42812),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 22549, 'MinRank' => 23201),
            '电子商务' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 61869, 'MinRank' => 63234),
            '国际商务' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 50520, 'MinRank' => 51645),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 60501, 'MinRank' => 61868),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 546, 'AvgScore' => 0, 'MaxRank' => 81426, 'MinRank' => 83093),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 55383, 'MinRank' => 56667),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 23890, 'MinRank' => 24595),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 59185, 'MinRank' => 60500),
            '会计学' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 23202, 'MinRank' => 23889),
            '财务管理' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 27528, 'MinRank' => 28339),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 54148, 'MinRank' => 55382),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 47165, 'MinRank' => 48309),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 61869, 'MinRank' => 63234),
            '金融学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 32383, 'MinRank' => 33227),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 41758, 'MinRank' => 42812),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 36866, 'MinRank' => 37816),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 40728, 'MinRank' => 41757),
            '税收学' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 29932, 'MinRank' => 30724),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 41758, 'MinRank' => 42812),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 54148, 'MinRank' => 55382),
            '商务英语' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 54148, 'MinRank' => 55382),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 61869, 'MinRank' => 63234),
            '新闻学' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 46082, 'MinRank' => 47164),
            '社会工作' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 557, 'AvgScore' => 0, 'MaxRank' => 64557, 'MinRank' => 65942),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 591, 'AvgScore' => 0, 'MaxRank' => 28340, 'MinRank' => 29149),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 44937, 'MinRank' => 46081),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 34117, 'MinRank' => 34999),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 43883, 'MinRank' => 44936),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 43883, 'MinRank' => 44936),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 591, 'AvgScore' => 0, 'MaxRank' => 28340, 'MinRank' => 29149),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 26046, 'MinRank' => 26778),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 24596, 'MinRank' => 25300),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 29150, 'MinRank' => 29931),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 550,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 79759, 'MinRank' => 81425),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 26046, 'MinRank' => 26778),
            '金融工程' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 38796, 'MinRank' => 39755),
            '金融科技' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 51646, 'MinRank' => 52916),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 34117, 'MinRank' => 34999),
            '精算学' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 35000, 'MinRank' => 35898),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 31516, 'MinRank' => 32382),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 35000, 'MinRank' => 35898),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 581,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 40728, 'MinRank' => 41757),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 47165, 'MinRank' => 48309),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 46082, 'MinRank' => 47164),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 37817, 'MinRank' => 38795),
            '数据科学' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 60501, 'MinRank' => 61868),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 52917, 'MinRank' => 54147),
            '软件工程' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 76536, 'MinRank' => 78109),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 70327, 'MinRank' => 71855),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 70327, 'MinRank' => 71855),
            '数字经济' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 44937, 'MinRank' => 46081),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 83094, 'MinRank' => 84781),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 535, 'AvgScore' => 0, 'MaxRank' => 100723, 'MinRank' => 102601)
        )
    ),
    '四川' => array(
        '文科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 5300, 'MinRank' => 5504),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 6418, 'MinRank' => 6641),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 6182, 'MinRank' => 6417),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 5505, 'MinRank' => 5722),
            '财政学' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 5505, 'MinRank' => 5722),
            '税收学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 4214, 'MinRank' => 4379),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 4053, 'MinRank' => 4213),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 5505, 'MinRank' => 5722),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 5935, 'MinRank' => 6181),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 4756, 'MinRank' => 4939),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 5505, 'MinRank' => 5722),
            '金融学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 4214, 'MinRank' => 4379),
            '金融学（FRM 方向）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 6182, 'MinRank' => 6417),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 5935, 'MinRank' => 6181),
            '商务英语' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 6894, 'MinRank' => 7132),
            '新闻学' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 6894, 'MinRank' => 7132),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 6894, 'MinRank' => 7132),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 6182, 'MinRank' => 6417)
        ),
        '理科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 58919, 'MinRank' => 59985),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 550,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 69409, 'MinRank' => 70573),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 40368, 'MinRank' => 41194),
            '税收学' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 42055, 'MinRank' => 42941),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 52971, 'MinRank' => 53929),
            '会计学' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 595, 'AvgScore' => 0, 'MaxRank' => 28930, 'MinRank' => 29596),
            '财务管理' => array('Num' => 0, 'MaxScore' => 605,  'MinScore' => 605, 'AvgScore' => 0, 'MaxRank' => 22524, 'MinRank' => 23113),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 602, 'AvgScore' => 0, 'MaxRank' => 24324, 'MinRank' => 24964),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 37089, 'MinRank' => 37911),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 585, 'AvgScore' => 0, 'MaxRank' => 36339, 'MinRank' => 37088),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 604,  'MinScore' => 604, 'AvgScore' => 0, 'MaxRank' => 23114, 'MinRank' => 23708),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 550,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 69409, 'MinRank' => 70573),
            '电子商务' => array('Num' => 0, 'MaxScore' => 544,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 76348, 'MinRank' => 77468),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 595,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 37912, 'MinRank' => 38719),
            '金融学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 34791, 'MinRank' => 35537),
            '保险学(精算方向)' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 35538, 'MinRank' => 36338),
            '金融学（FRM 方向）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 53930, 'MinRank' => 54889),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 48338, 'MinRank' => 49231),
            '精算学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 34791, 'MinRank' => 35537),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 614,  'MinScore' => 614, 'AvgScore' => 0, 'MaxRank' => 17564, 'MinRank' => 18113),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 33992, 'MinRank' => 34790),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 35538, 'MinRank' => 36338),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 34791, 'MinRank' => 35537),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 75137, 'MinRank' => 76347),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 70574, 'MinRank' => 71745),
            '数据科学' => array('Num' => 0, 'MaxScore' => 607,  'MinScore' => 607, 'AvgScore' => 0, 'MaxRank' => 21384, 'MinRank' => 21956),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 38720, 'MinRank' => 39504),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 540, 'AvgScore' => 0, 'MaxRank' => 81018, 'MinRank' => 82156),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 64021, 'MinRank' => 65058),
            '数字经济' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 62995, 'MinRank' => 64020)
        )
    ),
    '天津市' => array(
        '综合改革' => array(
            '法学' => array('Num' => 0, 'MaxScore' => 605,  'MinScore' => 605, 'AvgScore' => 0, 'MaxRank' => 10385, 'MinRank' => 10633),
            '金融学' => array('Num' => 0, 'MaxScore' => 604,  'MinScore' => 604, 'AvgScore' => 0, 'MaxRank' => 10634, 'MinRank' => 10828),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 616,  'MinScore' => 616, 'AvgScore' => 0, 'MaxRank' => 7978, 'MinRank' => 8193),
            '财政学' => array('Num' => 0, 'MaxScore' => 605,  'MinScore' => 605, 'AvgScore' => 0, 'MaxRank' => 10385, 'MinRank' => 10633),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 603, 'AvgScore' => 0, 'MaxRank' => 10829, 'MinRank' => 11067),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 613,  'MinScore' => 613, 'AvgScore' => 0, 'MaxRank' => 8611, 'MinRank' => 8821),
            '物流管理（智能供应链）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 11787, 'MinRank' => 12029),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 603, 'AvgScore' => 0, 'MaxRank' => 10829, 'MinRank' => 11067),
            '会计学' => array('Num' => 0, 'MaxScore' => 615,  'MinScore' => 615, 'AvgScore' => 0, 'MaxRank' => 8194, 'MinRank' => 8391),
            '国际商务' => array('Num' => 0, 'MaxScore' => 600,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 11530, 'MinRank' => 11786),
            '电子商务' => array('Num' => 0, 'MaxScore' => 609,  'MinScore' => 609, 'AvgScore' => 0, 'MaxRank' => 9505, 'MinRank' => 9715),
            '财务管理' => array('Num' => 0, 'MaxScore' => 610,  'MinScore' => 610, 'AvgScore' => 0, 'MaxRank' => 9269, 'MinRank' => 9504),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 620,  'MinScore' => 620, 'AvgScore' => 0, 'MaxRank' => 7198, 'MinRank' => 7371),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 623,  'MinScore' => 623, 'AvgScore' => 0, 'MaxRank' => 6630, 'MinRank' => 6808),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 12967, 'MinRank' => 13205),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 13206, 'MinRank' => 13469),
            '税收学' => array('Num' => 0, 'MaxScore' => 594,  'MinScore' => 594, 'AvgScore' => 0, 'MaxRank' => 12967, 'MinRank' => 13205),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 13206, 'MinRank' => 13469),
            '财政学（智慧财政）' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 12246, 'MinRank' => 12482),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 12246, 'MinRank' => 12482),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 12030, 'MinRank' => 12245),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 12030, 'MinRank' => 12245),
            '会计学(ACCA方向）' => array('Num' => 0, 'MaxScore' => 618,  'MinScore' => 618, 'AvgScore' => 0, 'MaxRank' => 7578, 'MinRank' => 7777),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 12030, 'MinRank' => 12245),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 12483, 'MinRank' => 12729),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 612,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 11787, 'MinRank' => 12029),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 11787, 'MinRank' => 12029),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 600,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 11530, 'MinRank' => 11786),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 12246, 'MinRank' => 12482),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 14726, 'MinRank' => 14985),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 589, 'AvgScore' => 0, 'MaxRank' => 14220, 'MinRank' => 14469),
            '软件工程' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 13988, 'MinRank' => 14219),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 14726, 'MinRank' => 14985),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 591, 'AvgScore' => 0, 'MaxRank' => 13725, 'MinRank' => 13987),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 13206, 'MinRank' => 13469),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 588,  'MinScore' => 588, 'AvgScore' => 0, 'MaxRank' => 14470, 'MinRank' => 14725),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 592,  'MinScore' => 592, 'AvgScore' => 0, 'MaxRank' => 13470, 'MinRank' => 13724),
            '金融工程' => array('Num' => 0, 'MaxScore' => 600,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 11530, 'MinRank' => 11786),
            '工程管理' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 12483, 'MinRank' => 12729),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 11787, 'MinRank' => 12029),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 603, 'AvgScore' => 0, 'MaxRank' => 10829, 'MinRank' => 11067),
            '精算学' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 603, 'AvgScore' => 0, 'MaxRank' => 10829, 'MinRank' => 11067),
            '数字经济' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 11787, 'MinRank' => 12029),
            '金融科技' => array('Num' => 0, 'MaxScore' => 597,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 12246, 'MinRank' => 12482),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 14726, 'MinRank' => 14985),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 14986, 'MinRank' => 15193)
        )
    ),
    '新疆维吾尔自治区' => array(
        '文科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 520,  'MinScore' => 520, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 515,  'MinScore' => 515, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 509,  'MinScore' => 509, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学（数字税收）' => array('Num' => 0, 'MaxScore' => 510,  'MinScore' => 510, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财务管理' => array('Num' => 0, 'MaxScore' => 497,  'MinScore' => 491, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 530,  'MinScore' => 527, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 510,  'MinScore' => 510, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 524,  'MinScore' => 524, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '理科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 492,  'MinScore' => 492, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 460,  'MinScore' => 449, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 420,  'MinScore' => 420, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 477,  'MinScore' => 477, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '财政学' => array('Num' => 0, 'MaxScore' => 464,  'MinScore' => 464, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '税收学（数字税收）' => array('Num' => 0, 'MaxScore' => 450,  'MinScore' => 450, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学' => array('Num' => 0, 'MaxScore' => 507,  'MinScore' => 482, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 513,  'MinScore' => 511, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '国际经济与贸易（数字贸易）' => array('Num' => 0, 'MaxScore' => 414,  'MinScore' => 402, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '经济学（数理经济实验班）' => array('Num' => 0, 'MaxScore' => 473,  'MinScore' => 423, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '金融学' => array('Num' => 0, 'MaxScore' => 461,  'MinScore' => 427, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 460,  'MinScore' => 460, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '精算学' => array('Num' => 0, 'MaxScore' => 425,  'MinScore' => 425, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学' => array('Num' => 0, 'MaxScore' => 423,  'MinScore' => 423, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 495,  'MinScore' => 495, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 469,  'MinScore' => 424, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 465,  'MinScore' => 399, 'AvgScore' => 0, 'MaxRank' => 0, 'MinRank' => 0)
        )
    ),
    '云南' => array(
        '文科' => array(
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 603,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 3164, 'MinRank' => 3268),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 601, 'AvgScore' => 0, 'MaxRank' => 3018, 'MinRank' => 3163),
            '财政学' => array('Num' => 0, 'MaxScore' => 610,  'MinScore' => 610, 'AvgScore' => 0, 'MaxRank' => 2057, 'MinRank' => 2162),
            '税收学' => array('Num' => 0, 'MaxScore' => 607,  'MinScore' => 607, 'AvgScore' => 0, 'MaxRank' => 2353, 'MinRank' => 2446),
            '会计学' => array('Num' => 0, 'MaxScore' => 609,  'MinScore' => 609, 'AvgScore' => 0, 'MaxRank' => 2163, 'MinRank' => 2251),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 613,  'MinScore' => 613, 'AvgScore' => 0, 'MaxRank' => 1783, 'MinRank' => 1867),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 601, 'AvgScore' => 0, 'MaxRank' => 3018, 'MinRank' => 3163),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 602, 'AvgScore' => 0, 'MaxRank' => 2901, 'MinRank' => 3017),
            '金融学' => array('Num' => 0, 'MaxScore' => 600,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 3164, 'MinRank' => 3268),
            '法学' => array('Num' => 0, 'MaxScore' => 605,  'MinScore' => 605, 'AvgScore' => 0, 'MaxRank' => 2562, 'MinRank' => 2679),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 604,  'MinScore' => 602, 'AvgScore' => 0, 'MaxRank' => 2901, 'MinRank' => 3017),
            '商务英语' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 602, 'AvgScore' => 0, 'MaxRank' => 2901, 'MinRank' => 3017),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 600,  'MinScore' => 600, 'AvgScore' => 0, 'MaxRank' => 3164, 'MinRank' => 3268),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 3269, 'MinRank' => 3396),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 3269, 'MinRank' => 3396),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 601, 'AvgScore' => 0, 'MaxRank' => 3018, 'MinRank' => 3163),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 599,  'MinScore' => 599, 'AvgScore' => 0, 'MaxRank' => 3269, 'MinRank' => 3396),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 604,  'MinScore' => 604, 'AvgScore' => 0, 'MaxRank' => 2680, 'MinRank' => 2789),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 608,  'MinScore' => 608, 'AvgScore' => 0, 'MaxRank' => 2252, 'MinRank' => 2352),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 604,  'MinScore' => 604, 'AvgScore' => 0, 'MaxRank' => 2680, 'MinRank' => 2789)
        ),
        '理科' => array(
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 558,  'MinScore' => 558, 'AvgScore' => 0, 'MaxRank' => 20864, 'MinRank' => 21248),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 20084, 'MinRank' => 20476),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 551,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 23725, 'MinRank' => 24162),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 14981, 'MinRank' => 15294),
            '税收学' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 15641, 'MinRank' => 16005),
            '会计学' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 14313, 'MinRank' => 14643),
            '财务管理' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 14981, 'MinRank' => 15294),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 579,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 13359, 'MinRank' => 13656),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 14313, 'MinRank' => 14643),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 552,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 23306, 'MinRank' => 23724),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 22098, 'MinRank' => 22520),
            '金融学' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 15295, 'MinRank' => 15640),
            '金融工程' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 16400, 'MinRank' => 16760),
            '金融科技' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 567, 'AvgScore' => 0, 'MaxRank' => 17437, 'MinRank' => 17838),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 561, 'AvgScore' => 0, 'MaxRank' => 19736, 'MinRank' => 20083),
            '精算学' => array('Num' => 0, 'MaxScore' => 556,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 21671, 'MinRank' => 22097),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 16761, 'MinRank' => 17095),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 568,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 18217, 'MinRank' => 18598),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 556, 'AvgScore' => 0, 'MaxRank' => 21671, 'MinRank' => 22097),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 18599, 'MinRank' => 18967),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 550,  'MinScore' => 550, 'AvgScore' => 0, 'MaxRank' => 24163, 'MinRank' => 24600),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 562,  'MinScore' => 562, 'AvgScore' => 0, 'MaxRank' => 19351, 'MinRank' => 19735),
            '工程管理' => array('Num' => 0, 'MaxScore' => 548,  'MinScore' => 548, 'AvgScore' => 0, 'MaxRank' => 25023, 'MinRank' => 25473),
            '数据科学' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 22903, 'MinRank' => 23305),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 14644, 'MinRank' => 14980),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 547, 'AvgScore' => 0, 'MaxRank' => 25474, 'MinRank' => 25917),
            '社会工作' => array('Num' => 0, 'MaxScore' => 545,  'MinScore' => 545, 'AvgScore' => 0, 'MaxRank' => 26334, 'MinRank' => 26759),
            '新闻学' => array('Num' => 0, 'MaxScore' => 551,  'MinScore' => 551, 'AvgScore' => 0, 'MaxRank' => 23725, 'MinRank' => 24162),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 26760, 'MinRank' => 27168),
            '数字经济' => array('Num' => 0, 'MaxScore' => 567,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 18968, 'MinRank' => 19350),
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 18217, 'MinRank' => 18598),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 18217, 'MinRank' => 18598),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 17839, 'MinRank' => 18216),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 18599, 'MinRank' => 18967),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 16400, 'MinRank' => 16760),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 571,  'MinScore' => 571, 'AvgScore' => 0, 'MaxRank' => 16006, 'MinRank' => 16399),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 18217, 'MinRank' => 18598)
        )
    ),
    '浙江' => array(
        '综合改革' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 640,  'MinScore' => 636, 'AvgScore' => 0, 'MaxRank' => 20551, 'MinRank' => 21222),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 634,  'MinScore' => 626, 'AvgScore' => 0, 'MaxRank' => 28032, 'MinRank' => 28859),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 638,  'MinScore' => 632, 'AvgScore' => 0, 'MaxRank' => 23370, 'MinRank' => 24121),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 623,  'MinScore' => 621, 'AvgScore' => 0, 'MaxRank' => 32320, 'MinRank' => 33166),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 629,  'MinScore' => 629, 'AvgScore' => 0, 'MaxRank' => 25631, 'MinRank' => 26395),
            '人力资源管理（数智人力）' => array('Num' => 0, 'MaxScore' => 621,  'MinScore' => 621, 'AvgScore' => 0, 'MaxRank' => 32320, 'MinRank' => 33166),
            '市场营销（数字营销）' => array('Num' => 0, 'MaxScore' => 623,  'MinScore' => 623, 'AvgScore' => 0, 'MaxRank' => 30528, 'MinRank' => 31431),
            '物流管理（智慧供应链）' => array('Num' => 0, 'MaxScore' => 610,  'MinScore' => 610, 'AvgScore' => 0, 'MaxRank' => 42540, 'MinRank' => 43538),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 626,  'MinScore' => 609, 'AvgScore' => 0, 'MaxRank' => 43539, 'MinRank' => 44504),
            '旅游管理（数字文旅）' => array('Num' => 0, 'MaxScore' => 607,  'MinScore' => 607, 'AvgScore' => 0, 'MaxRank' => 45535, 'MinRank' => 46588),
            '财政学' => array('Num' => 0, 'MaxScore' => 639,  'MinScore' => 639, 'AvgScore' => 0, 'MaxRank' => 18594, 'MinRank' => 19229),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 638,  'MinScore' => 638, 'AvgScore' => 0, 'MaxRank' => 19230, 'MinRank' => 19915),
            '税收学' => array('Num' => 0, 'MaxScore' => 638,  'MinScore' => 635, 'AvgScore' => 0, 'MaxRank' => 21223, 'MinRank' => 21917),
            '劳动与社会保障（康养金融）' => array('Num' => 0, 'MaxScore' => 615,  'MinScore' => 615, 'AvgScore' => 0, 'MaxRank' => 37757, 'MinRank' => 38698),
            '行政管理（数字政务）' => array('Num' => 0, 'MaxScore' => 631,  'MinScore' => 631, 'AvgScore' => 0, 'MaxRank' => 24122, 'MinRank' => 24862),
            '土地资源管理（评估与规划）' => array('Num' => 0, 'MaxScore' => 621,  'MinScore' => 621, 'AvgScore' => 0, 'MaxRank' => 32320, 'MinRank' => 33166),
            '会计学' => array('Num' => 0, 'MaxScore' => 643,  'MinScore' => 643, 'AvgScore' => 0, 'MaxRank' => 16135, 'MinRank' => 16712),
            '财务管理' => array('Num' => 0, 'MaxScore' => 638,  'MinScore' => 638, 'AvgScore' => 0, 'MaxRank' => 19230, 'MinRank' => 19915),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 647,  'MinScore' => 647, 'AvgScore' => 0, 'MaxRank' => 13883, 'MinRank' => 14383),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 641,  'MinScore' => 641, 'AvgScore' => 0, 'MaxRank' => 17269, 'MinRank' => 17926),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 641,  'MinScore' => 638, 'AvgScore' => 0, 'MaxRank' => 19230, 'MinRank' => 19915),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 647,  'MinScore' => 646, 'AvgScore' => 0, 'MaxRank' => 14384, 'MinRank' => 14955),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 625,  'MinScore' => 625, 'AvgScore' => 0, 'MaxRank' => 28860, 'MinRank' => 29684),
            '国际商务' => array('Num' => 0, 'MaxScore' => 624,  'MinScore' => 624, 'AvgScore' => 0, 'MaxRank' => 29685, 'MinRank' => 30527),
            '电子商务' => array('Num' => 0, 'MaxScore' => 615,  'MinScore' => 615, 'AvgScore' => 0, 'MaxRank' => 37757, 'MinRank' => 38698),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 635,  'MinScore' => 635, 'AvgScore' => 0, 'MaxRank' => 21223, 'MinRank' => 21917),
            '国民经济管理（数字化治理和投资管理）' => array('Num' => 0, 'MaxScore' => 624,  'MinScore' => 624, 'AvgScore' => 0, 'MaxRank' => 29685, 'MinRank' => 30527),
            '金融学' => array('Num' => 0, 'MaxScore' => 636,  'MinScore' => 634, 'AvgScore' => 0, 'MaxRank' => 21918, 'MinRank' => 22625),
            '保险学（精算方向）' => array('Num' => 0, 'MaxScore' => 631,  'MinScore' => 631, 'AvgScore' => 0, 'MaxRank' => 24122, 'MinRank' => 24862),
            '金融工程' => array('Num' => 0, 'MaxScore' => 618,  'MinScore' => 618, 'AvgScore' => 0, 'MaxRank' => 34944, 'MinRank' => 35872),
            '金融科技' => array('Num' => 0, 'MaxScore' => 606,  'MinScore' => 606, 'AvgScore' => 0, 'MaxRank' => 46589, 'MinRank' => 47617),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 631,  'MinScore' => 627, 'AvgScore' => 0, 'MaxRank' => 27234, 'MinRank' => 28031),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 624,  'MinScore' => 621, 'AvgScore' => 0, 'MaxRank' => 32320, 'MinRank' => 33166),
            '精算学' => array('Num' => 0, 'MaxScore' => 623,  'MinScore' => 623, 'AvgScore' => 0, 'MaxRank' => 30528, 'MinRank' => 31431),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 630,  'MinScore' => 630, 'AvgScore' => 0, 'MaxRank' => 24863, 'MinRank' => 25630),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 613,  'MinScore' => 612, 'AvgScore' => 0, 'MaxRank' => 40637, 'MinRank' => 41578),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 613,  'MinScore' => 611, 'AvgScore' => 0, 'MaxRank' => 41579, 'MinRank' => 42539),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 601,  'MinScore' => 597, 'AvgScore' => 0, 'MaxRank' => 56227, 'MinRank' => 57294),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 606,  'MinScore' => 606, 'AvgScore' => 0, 'MaxRank' => 46589, 'MinRank' => 47617),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 60553, 'MinRank' => 61700),
            '数据科学' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 55084, 'MinRank' => 56226),
            '法学' => array('Num' => 0, 'MaxScore' => 642,  'MinScore' => 640, 'AvgScore' => 0, 'MaxRank' => 17927, 'MinRank' => 18593),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 642,  'MinScore' => 642, 'AvgScore' => 0, 'MaxRank' => 16713, 'MinRank' => 17268),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 639,  'MinScore' => 639, 'AvgScore' => 0, 'MaxRank' => 18594, 'MinRank' => 19229),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 637,  'MinScore' => 637, 'AvgScore' => 0, 'MaxRank' => 19916, 'MinRank' => 20550),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 607,  'MinScore' => 607, 'AvgScore' => 0, 'MaxRank' => 45535, 'MinRank' => 46588),
            '软件工程' => array('Num' => 0, 'MaxScore' => 606,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 87875, 'MinRank' => 89008),
            '商务英语' => array('Num' => 0, 'MaxScore' => 611,  'MinScore' => 611, 'AvgScore' => 0, 'MaxRank' => 41579, 'MinRank' => 42539),
            '国际经济发展合作' => array('Num' => 0, 'MaxScore' => 620,  'MinScore' => 620, 'AvgScore' => 0, 'MaxRank' => 33167, 'MinRank' => 34040),
            '社会工作' => array('Num' => 0, 'MaxScore' => 611,  'MinScore' => 611, 'AvgScore' => 0, 'MaxRank' => 41579, 'MinRank' => 42539),
            '新闻学' => array('Num' => 0, 'MaxScore' => 610,  'MinScore' => 610, 'AvgScore' => 0, 'MaxRank' => 42540, 'MinRank' => 43538),
            '汉语国际教育' => array('Num' => 0, 'MaxScore' => 612,  'MinScore' => 612, 'AvgScore' => 0, 'MaxRank' => 40637, 'MinRank' => 41578),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 67279, 'MinRank' => 68427),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 602,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 106793, 'MinRank' => 108043),
            '数字经济' => array('Num' => 0, 'MaxScore' => 609,  'MinScore' => 609, 'AvgScore' => 0, 'MaxRank' => 43539, 'MinRank' => 44504),
            '软件工程(中外合作办学)' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 78686, 'MinRank' => 79785),
            '数字经济(中外合作办学)' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 79786, 'MinRank' => 80941)
        )
    ),
    '重庆市' => array(
        '文科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 596, 'AvgScore' => 0, 'MaxRank' => 1701, 'MinRank' => 1760),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 559, 'AvgScore' => 0, 'MaxRank' => 4834, 'MinRank' => 4953),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 555, 'AvgScore' => 0, 'MaxRank' => 5314, 'MinRank' => 5449),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 564,  'MinScore' => 564, 'AvgScore' => 0, 'MaxRank' => 4305, 'MinRank' => 4416),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 526,  'MinScore' => 526, 'AvgScore' => 0, 'MaxRank' => 9673, 'MinRank' => 9838),
            '财政学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 3668, 'MinRank' => 3780),
            '税收学' => array('Num' => 0, 'MaxScore' => 577,  'MinScore' => 577, 'AvgScore' => 0, 'MaxRank' => 3033, 'MinRank' => 3113),
            '会计学' => array('Num' => 0, 'MaxScore' => 584,  'MinScore' => 584, 'AvgScore' => 0, 'MaxRank' => 2456, 'MinRank' => 2527),
            '财务管理' => array('Num' => 0, 'MaxScore' => 576,  'MinScore' => 576, 'AvgScore' => 0, 'MaxRank' => 3114, 'MinRank' => 3204),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 593,  'MinScore' => 593, 'AvgScore' => 0, 'MaxRank' => 1859, 'MinRank' => 1930),
            '会计学（CIMA方向）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 3205, 'MinRank' => 3293),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 3205, 'MinRank' => 3293),
            '国际经济与贸易（BA方向）' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 5571, 'MinRank' => 5687),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 578,  'MinScore' => 578, 'AvgScore' => 0, 'MaxRank' => 2934, 'MinRank' => 3032),
            '金融学' => array('Num' => 0, 'MaxScore' => 574,  'MinScore' => 574, 'AvgScore' => 0, 'MaxRank' => 3294, 'MinRank' => 3385),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 552, 'AvgScore' => 0, 'MaxRank' => 5688, 'MinRank' => 5824),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 3205, 'MinRank' => 3293),
            '法学（数据法学）' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 573, 'AvgScore' => 0, 'MaxRank' => 3386, 'MinRank' => 3482),
            '商务英语' => array('Num' => 0, 'MaxScore' => 542,  'MinScore' => 542, 'AvgScore' => 0, 'MaxRank' => 7114, 'MinRank' => 7264),
            '社会工作' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 6082, 'MinRank' => 6221)
        ),
        '理科' => array(
            '会计学（国际会计）' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 17589, 'MinRank' => 17944),
            '金融学（国际投资与金融）' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 23889, 'MinRank' => 24357),
            '金融学（CFA方向）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 19882, 'MinRank' => 20262),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 569,  'MinScore' => 569, 'AvgScore' => 0, 'MaxRank' => 24358, 'MinRank' => 24785),
            '工商管理（智能商务）' => array('Num' => 0, 'MaxScore' => 560,  'MinScore' => 560, 'AvgScore' => 0, 'MaxRank' => 28282, 'MinRank' => 28781),
            '市场营销（国际营销）' => array('Num' => 0, 'MaxScore' => 549,  'MinScore' => 549, 'AvgScore' => 0, 'MaxRank' => 33581, 'MinRank' => 34042),
            '财政学' => array('Num' => 0, 'MaxScore' => 590,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 16152, 'MinRank' => 16513),
            '财政学（智慧财税）' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 19110, 'MinRank' => 19519),
            '税收学' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 17589, 'MinRank' => 17944),
            '会计学（注册会计师）' => array('Num' => 0, 'MaxScore' => 598,  'MinScore' => 598, 'AvgScore' => 0, 'MaxRank' => 13385, 'MinRank' => 13723),
            '会计学（智能会计）' => array('Num' => 0, 'MaxScore' => 589,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 17239, 'MinRank' => 17588),
            '会计学（ACCA方向）' => array('Num' => 0, 'MaxScore' => 591,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 16152, 'MinRank' => 16513),
            '经济学（数理经济）' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 586, 'AvgScore' => 0, 'MaxRank' => 17589, 'MinRank' => 17944),
            '数字经济' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 579, 'AvgScore' => 0, 'MaxRank' => 20263, 'MinRank' => 20676),
            '金融学' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 19882, 'MinRank' => 20262),
            '金融工程' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 18695, 'MinRank' => 19109),
            '金融科技' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 26936, 'MinRank' => 27386),
            '金融学（FRM方向）' => array('Num' => 0, 'MaxScore' => 575,  'MinScore' => 575, 'AvgScore' => 0, 'MaxRank' => 21846, 'MinRank' => 22254),
            '经济统计学' => array('Num' => 0, 'MaxScore' => 596,  'MinScore' => 590, 'AvgScore' => 0, 'MaxRank' => 16152, 'MinRank' => 16513),
            '精算学' => array('Num' => 0, 'MaxScore' => 582,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 19110, 'MinRank' => 19519),
            '应用统计学' => array('Num' => 0, 'MaxScore' => 585,  'MinScore' => 583, 'AvgScore' => 0, 'MaxRank' => 18695, 'MinRank' => 19109),
            '计算机科学与技术' => array('Num' => 0, 'MaxScore' => 586,  'MinScore' => 581, 'AvgScore' => 0, 'MaxRank' => 19520, 'MinRank' => 19881),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 583,  'MinScore' => 582, 'AvgScore' => 0, 'MaxRank' => 19110, 'MinRank' => 19519),
            '信息与计算科学' => array('Num' => 0, 'MaxScore' => 570,  'MinScore' => 570, 'AvgScore' => 0, 'MaxRank' => 23889, 'MinRank' => 24357),
            '信息管理与信息系统（金融智能）' => array('Num' => 0, 'MaxScore' => 572,  'MinScore' => 572, 'AvgScore' => 0, 'MaxRank' => 23030, 'MinRank' => 23465),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 25633, 'MinRank' => 26084),
            '数据科学' => array('Num' => 0, 'MaxScore' => 566,  'MinScore' => 566, 'AvgScore' => 0, 'MaxRank' => 25633, 'MinRank' => 26084),
            '软件工程（VR软件开发）' => array('Num' => 0, 'MaxScore' => 561,  'MinScore' => 534, 'AvgScore' => 0, 'MaxRank' => 41158, 'MinRank' => 41686),
            '软件工程' => array('Num' => 0, 'MaxScore' => 559,  'MinScore' => 533, 'AvgScore' => 0, 'MaxRank' => 41687, 'MinRank' => 42243),
            '工程管理' => array('Num' => 0, 'MaxScore' => 565,  'MinScore' => 565, 'AvgScore' => 0, 'MaxRank' => 26085, 'MinRank' => 26509),
            '法学（法务会计）' => array('Num' => 0, 'MaxScore' => 587,  'MinScore' => 587, 'AvgScore' => 0, 'MaxRank' => 17239, 'MinRank' => 17588),
            '法学（涉外法治）' => array('Num' => 0, 'MaxScore' => 580,  'MinScore' => 580, 'AvgScore' => 0, 'MaxRank' => 19882, 'MinRank' => 20262),
            '物联网工程' => array('Num' => 0, 'MaxScore' => 573,  'MinScore' => 568, 'AvgScore' => 0, 'MaxRank' => 24786, 'MinRank' => 25204),
            '虚拟现实技术' => array('Num' => 0, 'MaxScore' => 563,  'MinScore' => 563, 'AvgScore' => 0, 'MaxRank' => 26936, 'MinRank' => 27386),
            '软件工程（中外合作办学）' => array('Num' => 0, 'MaxScore' => 553,  'MinScore' => 553, 'AvgScore' => 0, 'MaxRank' => 31620, 'MinRank' => 32101),
            '数字经济（中外合作办学）' => array('Num' => 0, 'MaxScore' => 555,  'MinScore' => 544, 'AvgScore' => 0, 'MaxRank' => 36093, 'MinRank' => 36594)
        )
    )
);
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['type'])) {
        if ($_GET['type'] === 'area') {
            if (isset($_GET['province'])) {
                echo (json_encode($AreaType[$_GET['province']]));
            } else {
                echo (json_encode(array_keys($AreaType)));
            }
        } else if ($_GET['type'] === 'rank') {
            if (isset($_GET['province']) && isset($_GET['major'])) {
                if (isset($_GET['rank']) && $_GET['rank'] != '') {
                    $rank = intval($_GET['rank']);
                    $high_major = array();
                    $middle_major = array();
                    $low_major = array();
                    foreach ($Subject[$_GET['province']][$_GET['major']] as $key => $value) {
                        if ($value['MaxRank'] >= $rank) {
                            array_push($low_major, array('Subject' => $key) + $value);
                        } else if ($value['MinRank'] < $rank) {
                            array_push($high_major, array('Subject' => $key) + $value);
                        } else {
                            array_push($middle_major, array('Subject' => $key) + $value);
                        }
                    }
                    echo (json_encode(array('high_major' => $high_major, 'middle_major' => $middle_major, 'low_major' => $low_major)));
                } else {
                    echo (json_encode($AreaScore[$_GET['province']][$_GET['major']]));
                }
            }
        }
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>江西财经大学-志愿查询</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/element-plus/dist/index.css">
    <script src="https://unpkg.com/element-plus"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1d4f91;
            --secondary: #e63946;
            --success: #4caf50;
            --warning: #ff9800;
            --info: #2196f3;
            --light: #f8f9fa;
            --dark: #212529;
            --cufe-blue: #1d4f91;
            --cufe-secondary: #c0a050;
        }

        * {
            transition: all 0.3s ease;
        }

        body {
            font-family: 'Noto Sans SC', 'Microsoft YaHei', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e6f0ff 100%);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--cufe-blue), var(--cufe-secondary));
        }

        .header-title {
            color: var(--cufe-blue);
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .header-subtitle {
            color: #666;
            font-size: 1rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .card {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .card-title {
            color: var(--primary);
            font-size: 1.3rem;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid #f0f0f0;
            display: flex;
            align-items: center;
        }

        .card-title i {
            margin-right: 10px;
            color: var(--cufe-blue);
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stats-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-top: 4px solid;
        }

        .stats-card.high {
            border-color: var(--success);
        }

        .stats-card.mid {
            border-color: var(--warning);
        }

        .stats-card.low {
            border-color: var(--secondary);
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            opacity: 0.1;
        }

        .stats-card-title {
            font-size: 1rem;
            color: #666;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .stats-card-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .qrcode-container {
            text-align: center;
            margin: 30px 0;
        }

        .qrcode-box {
            display: inline-block;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .qrcode-caption {
            margin-top: 15px;
            font-size: 0.95rem;
            color: var(--primary);
            font-weight: 500;
        }

        .table-title {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 8px 0;
        }

        .table-title i {
            margin-right: 8px;
            font-size: 1.5rem;
        }

        .footer {
            text-align: center;
            margin: 50px 0 20px;
            padding: 25px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }



        .footer-link {
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .footer-link i {
            margin-right: 5px;
            color: var(--cufe-secondary);
        }

        .footer-text {
            color: #666;
            font-size: 0.85rem;
            margin-top: 10px;
        }

        .el-table {
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #ebeef5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .el-table th {
            background-color: #f5f7ff !important;
            color: var(--primary);
            font-weight: 600;
        }

        .el-table__row:hover td {
            background-color: #f8fbff !important;
        }

        .el-table--striped .el-table__body tr.el-table__row--striped td {
            background-color: #f9fafd;
        }

        .el-form-item__label {
            color: var(--primary) !important;
            font-weight: 500 !important;
        }

        .el-input__inner {
            border-radius: 8px !important;
        }

        .el-select .el-input__inner {
            padding-right: 30px !important;
        }

        .el-alert {
            border-radius: 8px !important;
            margin-bottom: 25px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .header-title {
                font-size: 1.8rem;

            }

            .stats-container {
                grid-template-columns: 1fr;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Animation effects */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: fadeIn 0.6s ease forwards;
        }

        .delay-1 {
            animation-delay: 0.1s;
        }

        .delay-2 {
            animation-delay: 0.2s;
        }

        .delay-3 {
            animation-delay: 0.3s;
        }

        .subtitle {
            margin-top: 0;
            font-size: 0.8em;
            color: #666;
            margin-top: -1.3em;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="header animate-in">
                <span>
                    <h1 class="header-title">
                        江西财经大学志愿查询
                    </h1>
                    <p class="subtitle">2025年高考志愿填报参考工具</p>
                </span>

                <div class="header-subtitle" style="margin-top:1em">
                    此页面查询结果仅供参考，请勿过度依赖此页面结果，理性填报。
                    <span class="text-red-500 font-medium">对口专业仅有分数参考价值</span>，
                    数据来源于：<el-link type="primary" href="https://zsjy.jxufe.edu.cn/listPage?uuid1=1cd53fd7-db3a-4751-acca-816383f6d79e&uuid2=be452428-1afd-46e4-9957-527c9dc6fccb">
                        江西财经大学2024级录取情况</el-link>
                </div>
                <div class="mt-3 text-gray-600">
                    <p><i class="fas fa-users mr-1"></i>江西财经大学迎新群：974051392</p>
                    <p>
                        <i class="fas fa-link mr-1"></i>点击链接加入腾讯频道：
                        <a href="https://pd.qq.com/s/esds9oit0" class="text-blue-500 hover:underline">【江西财经大学】</a>
                    </p>
                </div>
            </div>

            <div class="animate-in delay-1">
                <el-alert title="请注意：如果你发现下列数据中出现0，则表示该数据暂未被收录，建议参考官方网站以获取更为准确详尽的数据"
                    type="warning"
                    :closable="false"
                    show-icon />
            </div>

            <div class="card animate-in delay-1">
                <h2 class="card-title">
                    <i class="fas fa-search"></i>
                    查询条件设置
                </h2>

                <el-form :model="form" class="form-grid">
                    <el-form-item label="省份">
                        <el-select v-model="form.province"
                            placeholder="请选择省份"
                            @change="getMajor"
                            style="width:100%"
                            size="large">
                            <el-option
                                v-for="item in provinceList"
                                :key="item"
                                :label="item"
                                :value="item"></el-option>
                        </el-select>
                    </el-form-item>

                    <el-form-item label="科类">
                        <el-select v-model="form.major"
                            placeholder="请选择科类"
                            @change="getRank"
                            style="width:100%"
                            size="large">
                            <el-option
                                v-for="item in majorList"
                                :key="item"
                                :label="item"
                                :value="item"></el-option>
                        </el-select>
                    </el-form-item>

                    <el-form-item label="位次">
                        <el-input-number v-model="form.rank"
                            :min="0"
                            :max="5000000"
                            @change="getSubject"
                            size="large"
                            controls-position="right"
                            style="width:100%"></el-input-number>
                    </el-form-item>
                </el-form>
            </div>

            <div class="stats-container animate-in delay-2">
                <div class="stats-card high">
                    <div class="stats-card-title">
                        <i class="fas fa-arrow-up mr-1"></i>最高排名
                    </div>
                    <div class="stats-card-value">{{maxRank}}</div>
                </div>

                <div class="stats-card low">
                    <div class="stats-card-title">
                        <i class="fas fa-arrow-down mr-1"></i>最低排名
                    </div>
                    <div class="stats-card-value">{{minRank}}</div>
                </div>

                <div class="stats-card mid">
                    <div class="stats-card-title">
                        <i class="fas fa-user mr-1"></i>当前查询排名
                    </div>
                    <div class="stats-card-value">{{form.rank}}</div>
                </div>
            </div>

            <div class="card animate-in delay-2" v-if="form.rank>0">
                <div class="table-title">
                    <i class="fas fa-exclamation-triangle" style="color:#e63946"></i>
                    <h2 class="text-xl font-bold text-red-600">高于排名的专业（冲一冲）</h2>
                </div>
                <el-table :data="subjectList.high_major" style="width: 100%" :empty-text="high_text" stripe>
                    <el-table-column prop="Subject" label="专业" min-width="160"></el-table-column>
                    <el-table-column prop="Num" label="招生人数" align="center" width="110"></el-table-column>
                    <el-table-column prop="MaxScore" label="最高分" align="center" width="110"></el-table-column>
                    <el-table-column prop="MinScore" label="最低分" align="center" width="110"></el-table-column>
                    <el-table-column prop="MaxRank" label="最高排名" align="center" width="110"></el-table-column>
                    <el-table-column prop="MinRank" label="最低排名" align="center" width="110"></el-table-column>
                </el-table>
            </div>

            <div class="card animate-in delay-2" v-if="form.rank>0">
                <div class="table-title">
                    <i class="fas fa-balance-scale" style="color:#ff9800"></i>
                    <h2 class="text-xl font-bold text-blue-600">接近排名的专业（试一试）</h2>
                </div>
                <el-table :data="subjectList.middle_major" style="width: 100%" :empty-text="middle_text" stripe>
                    <el-table-column prop="Subject" label="专业" min-width="160"></el-table-column>
                    <el-table-column prop="Num" label="招生人数" align="center" width="110"></el-table-column>
                    <el-table-column prop="MaxScore" label="最高分" align="center" width="110"></el-table-column>
                    <el-table-column prop="MinScore" label="最低分" align="center" width="110"></el-table-column>
                    <el-table-column prop="MaxRank" label="最高排名" align="center" width="110"></el-table-column>
                    <el-table-column prop="MinRank" label="最低排名" align="center" width="110"></el-table-column>
                </el-table>
            </div>

            <div class="card animate-in delay-2" v-if="form.rank>0">
                <div class="table-title">
                    <i class="fas fa-chart-line" style="color:#4caf50"></i>
                    <h2 class="text-xl font-bold text-green-600">低于排名的专业（保一保）</h2>
                </div>
                <el-table :data="subjectList.low_major" style="width: 100%" empty-text="没有找到相关数据" stripe>
                    <el-table-column prop="Subject" label="专业" min-width="160"></el-table-column>
                    <el-table-column prop="Num" label="招生人数" align="center" width="110"></el-table-column>
                    <el-table-column prop="MaxScore" label="最高分" align="center" width="110"></el-table-column>
                    <el-table-column prop="MinScore" label="最低分" align="center" width="110"></el-table-column>
                    <el-table-column prop="MaxRank" label="最高排名" align="center" width="110"></el-table-column>
                    <el-table-column prop="MinRank" label="最低排名" align="center" width="110"></el-table-column>
                </el-table>
            </div>

            <div class="qrcode-container animate-in delay-3">
                <div class="qrcode-box">
                    <el-image
                        style="width: 180px; height: 180px"
                        src="qrcode.jpg"
                        fit="cover"
                        :preview-src-list="['qrcode.jpg']"
                        :preview-teleported="true"
                        :z-index="9999"></el-image>
                    <div class="qrcode-caption">
                        <i class="fas fa-qrcode mr-1"></i>扫描二维码加入官方腾讯频道
                    </div>
                </div>
            </div>


            <div class="footer animate-in delay-3">

                <p class="footer-text">有任何问题或改进意见请联系
                    <a href="mailto:2202305234@stu.jxufe.edu.cn" class="text-blue-500 hover:underline">2202305234@stu.jxufe.edu.cn</a>
                    或qq:
                    <a href="https://qm.qq.com/cgi-bin/qm/qr?k=_x1TkvZYdC8Xq-QERB3V2zLH2t3QiNUb" class="text-blue-500 hover:underline">910836523</a>
                </p>
                <p class="footer-text">
                    Run by 江西财经大学网络安全协会 & <a href="https://www.amqyy.cn/" class="text-blue-500 hover:underline">秋雨样</a> |
                    数据维护：江西财经大学网络安全协会 & <a href="https://github.com/TangTangChu" class="text-blue-500 hover:underline">糖糖毬</a>
                </p>
                <p class="footer-text">
                    Powered by <a href="https://dlusec.cn/" class="text-blue-500 hover:underline">大理大学网络安全协会</a> & MCSOG &
                    <a href="https://mcsog.top/" class="text-blue-500 hover:underline">f00001111</a>
                <p class="footer-text">已加入School Robot V2计划</p>
                </p>
            </div>
        </div>
    </div>

    <script>
        const App = {
            mounted() {
                this.getProvince();
            },
            methods: {
                getProvince() {
                    fetch("https://act.amqyy.cn/index.php?type=area")
                        .then((response) => response.json())
                        .then((data) => {
                            this.provinceList = data;

                            this.high_text = "你的排名超过了大多数专业哦~";
                            this.middle_text = "你的排名可能不太合适";
                        });
                },
                getMajor() {
                    fetch("https://act.amqyy.cn/index.php?type=area&province=" + this.form.province)
                        .then((response) => response.json())
                        .then((data) => {
                            this.majorList = data;
                            this.form.major = data[0];

                            this.high_text = "你的排名超过了大多数专业哦~";
                            this.middle_text = "你的排名可能不太合适";
                            this.getRank();
                        });
                },
                getRank() {
                    fetch(
                            "https://act.amqyy.cn/index.php?type=rank&province=" +
                            this.form.province +
                            "&major=" +
                            this.form.major
                        )
                        .then((response) => response.json())
                        .then((data) => {
                            this.maxRank = data[0] > data[1] ? data[1] : data[0];
                            this.minRank = data[0] > data[1] ? data[0] : data[1];

                            this.high_text = "你的排名超过了大多数专业哦~";
                            this.middle_text = "你的排名可能不太合适";
                            this.getSubject();
                        });
                },
                getSubject() {
                    if (this.form.rank == 0 || this.form.major == "" || this.form.province == "") {

                        this.high_text = "没有数据";
                        this.middle_text = "没有数据";
                        return;
                    }

                    this.high_text = "你的排名超过了大多数专业哦~";
                    this.middle_text = "你的排名可能不太合适";

                    fetch(
                            "https://act.amqyy.cn/index.php?type=rank&province=" +
                            this.form.province +
                            "&major=" +
                            this.form.major +
                            "&rank=" +
                            this.form.rank
                        )
                        .then((response) => response.json())
                        .then((data) => {
                            this.subjectList = data;
                        });
                },
            },
            data() {
                return {
                    provinceList: {},
                    majorList: {},
                    subjectList: {},
                    form: {
                        province: "",
                        major: "",
                        rank: 0,
                    },
                    maxRank: 0,
                    minRank: 0,

                    high_text: "没有数据",
                    middle_text: "没有数据",
                };
            },
        };
        const app = Vue.createApp(App);
        app.use(ElementPlus);
        app.mount("#app");
    </script>
</body>

</html>
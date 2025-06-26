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
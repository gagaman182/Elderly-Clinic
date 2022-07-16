<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> Thai Mental State Examination: TMSE </v-card-title>

          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            คะแนนเต็ม 30 คะแนน <br />
            <24 คะแนน มีภาวะผิดปกติทางด้านความสามารถของสมองโดยเฉพาะความจำ
            (Cognitive impairment )<br />
            >24 คะแนน ปกติ<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- --------1--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                1. Orientation (6 คะแนน) ผู้ทดสอบถามผู้ถูกทดสอบ
              </h3>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse1_1"
                    label="1.1 วันนี้ เป็นวันอะไร  "
                    value="1.1"
                    class="mb-2"
                    @change="tmse_check_1"
                  >
                  </v-checkbox>
                </v-col>
                <v-col
                  ><v-text-field
                    dense
                    rounded
                    outlined
                    v-model="tmse1_1_detail"
                  ></v-text-field> </v-col
              ></v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse1_2"
                    label="1.2 วันนี้ วันที่เท่าไร  "
                    value="1.2"
                    class="mb-2"
                    @change="tmse_check_1"
                  >
                  </v-checkbox>
                </v-col>
                <v-col
                  ><v-text-field
                    dense
                    rounded
                    outlined
                    v-model="tmse1_2_detail"
                  ></v-text-field> </v-col
              ></v-row>

              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse1_3"
                    label="1.3 เดือนนี้ เดือนอะไร"
                    value="1.3"
                    class="mb-2"
                    @change="tmse_check_1"
                  >
                  </v-checkbox>
                </v-col>
                <v-col
                  ><v-text-field
                    dense
                    rounded
                    outlined
                    v-model="tmse1_3_detail"
                  ></v-text-field> </v-col
              ></v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse1_4"
                    label="1.4 ขณะนี้เป็นช่วงเวลาอะไรของวัน (เช้า เที่ยง บ่าย เย็น)"
                    value="1.4"
                    class="mb-2"
                    @change="tmse_check_1"
                  >
                  </v-checkbox>
                </v-col>
                <v-col
                  ><v-text-field
                    dense
                    rounded
                    outlined
                    v-model="tmse1_4_detail"
                  ></v-text-field> </v-col
              ></v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse1_5"
                    label="1.5 ที่นี่ที่ไหน"
                    value="1.5"
                    class="mb-2"
                    @change="tmse_check_1"
                  >
                  </v-checkbox>
                </v-col>
                <v-col
                  ><v-text-field
                    dense
                    rounded
                    outlined
                    v-model="tmse1_5_detail"
                  ></v-text-field> </v-col
              ></v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse1_6"
                    label="1.6 คนที่เห็นในภาพนี้อาชีพอะไร"
                    value="1.6"
                    class="mb-2"
                    @change="tmse_check_1"
                  >
                  </v-checkbox>
                </v-col>
                <v-col
                  ><v-text-field
                    dense
                    rounded
                    outlined
                    v-model="tmse1_6_detail"
                  ></v-text-field> </v-col
              ></v-row>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tmse1 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------2--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                2. Registration (3 คะแนน) ผู้ทดสอบบอกผู้ถูกทดสอบว่า
                “เดี๋ยวจะบอกชื่อของ 3 อย่าง ให้ฟังดีๆ จะบอกเพียงครั้งเดียว
                เมื่อพูดจบแล้วให้พูดตามและจำไว้ เดี๋ยวจะกลับมาถามซ้ำ
                (พูดห่างกันคำละ 1 วินาที)
              </h3>

              <v-checkbox
                v-model="tmse2_1"
                label="ต้นไม้"
                value="1.1"
                class="mb-2"
                @change="tmse_check_2"
              >
              </v-checkbox>

              <v-checkbox
                v-model="tmse2_2"
                label="รถยนต์"
                value="1.2"
                class="mb-2"
                @change="tmse_check_2"
              >
              </v-checkbox>

              <v-checkbox
                v-model="tmse2_3"
                label="มือ"
                value="1.3"
                class="mb-2"
                @change="tmse_check_2"
              >
              </v-checkbox>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tmse2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------3--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                3. Attention (5 คะแนน) ให้ผู้ถูกทดสอบบอกวันในหนึ่งสัปดาห์ถอยหลัง
                โดยเริ่มจากวันอาทิตย์ ถอยไปเป็นวันเสาร์ ถอยต่อไปเรื่อยๆ
                จนครบสัปดาห์(การให์คะแนน : คำตอบต้องมีความต่อเนื่อง)
              </h3>

              <v-checkbox
                v-model="tmse3_1"
                label="ศุกร์"
                value="1.1"
                class="mb-2"
                @change="tmse_check_3"
              >
              </v-checkbox>

              <v-checkbox
                v-model="tmse3_2"
                label="พฤหัสบดี"
                value="1.2"
                class="mb-2"
                @change="tmse_check_3"
              >
              </v-checkbox>

              <v-checkbox
                v-model="tmse3_3"
                label="พุธ"
                value="1.3"
                class="mb-2"
                @change="tmse_check_3"
              >
              </v-checkbox>
              <v-checkbox
                v-model="tmse3_4"
                label="อังคาร"
                value="1.4"
                class="mb-2"
                @change="tmse_check_3"
              >
              </v-checkbox>
              <v-checkbox
                v-model="tmse3_5"
                label="จันทร์"
                value="1.5"
                class="mb-2"
                @change="tmse_check_3"
              >
              </v-checkbox>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tmse3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------4--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                4. Calculation (3 คะแนน) ผู้ทดสอบบอกผู้ถูกทดสอบว่า “ให้คิดเลข
                100-7 ไปเรื่อยๆ 3 ครั้ง”
              </h3>

              <v-checkbox
                v-model="tmse4_1"
                label="93"
                value="1.1"
                class="mb-2"
                @change="tmse_check_4"
              >
              </v-checkbox>

              <v-checkbox
                v-model="tmse4_2"
                label="86"
                value="1.2"
                class="mb-2"
                @change="tmse_check_4"
              >
              </v-checkbox>

              <v-checkbox
                v-model="tmse4_3"
                label="79"
                value="1.3"
                class="mb-2"
                @change="tmse_check_4"
              >
              </v-checkbox>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tmse4 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------5--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">5. Language</h3>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse5_1"
                    label="5.1 ผู้ทดสอบชี้ไปที่นาฬิกาข้อมือแล้วถามผู้ถูกทดสอบว่า “สิ่งนี้เรียกว่าอะไร”"
                    value="1.1"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                </v-col>
                <v-col>
                  <v-text-field dense rounded outlined v-model="tmse5_1_detail">
                  </v-text-field>
                </v-col>
              </v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse5_2"
                    label="5.2 ผู้ทดสอบชี้ไปที่เสื้อของตนเองแล้วถามผู้ถูกทดสอบว่า “สิ่งนี้เรียกว่าอะไร” "
                    value="1.2"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                </v-col>
                <v-col>
                  <v-text-field dense rounded outlined v-model="tmse5_2_detail">
                  </v-text-field>
                </v-col>
              </v-row>

              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="tmse5_3"
                    label="5.3 ผู้ทดสอบบอกผู้ถูกทดสอบว่าให้ฟังประโยคต่อไปนี้ให้ดีแล้วพูดตาม 	
     “ยายพาหลานไปซื้อขนมที่ตลาด” 
"
                    value="1.3"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                </v-col>
                <v-col>
                  <v-text-field dense rounded outlined v-model="tmse5_3_detail">
                  </v-text-field>
                </v-col>
              </v-row>
              <v-divider class="mt-5 mb-5" />
              <v-row
                ><v-col cols="12" md="10">
                  <p class="body-1">
                    5.4 ผู้ทดสอบบอกผู้ถูกทดสอบให้ทำตามคำสั่ง
                    “ให้หยิบกระดาษด้วยมือขวา เอาไปพับครึ่งและส่งกระดาษ (3 คะแนน)
                  </p>
                  <v-checkbox
                    v-model="tmse5_4_1"
                    label="หยิบด้วยมือขวา"
                    value="1.1"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                  <v-checkbox
                    v-model="tmse5_4_2"
                    label="พับครึ่ง"
                    value="1.2"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                  <v-checkbox
                    v-model="tmse5_4_3"
                    label="ส่งคืนให้ผู้ทดสอบ"
                    value="1.3"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
              <v-divider class="mt-5 mb-5" />
              <v-row>
                <v-col>
                  <v-checkbox
                    v-model="tmse5_5"
                    label="5.5 ผู้ทดสอบบอกผู้ถูกทดสอบว่าให้อ่านคำว่า “หลับตา”  แล้วทำตาม"
                    value="1.1"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                </v-col>
                <v-col>
                  <v-text-field dense rounded outlined v-model="tmse5_5_detail">
                  </v-text-field>
                </v-col>
                <v-col cols="12" md="12">
                  <img src="@/assets/tmse5_5.png" />
                </v-col>
              </v-row>
              <v-divider class="mt-5 mb-5" />
              <v-row
                ><v-col cols="12" md="6">
                  <v-checkbox
                    v-model="tmse5_6"
                    label="5.6 ผู้ทดสอบบอกผู้ถูกทดสอบว่าให้วาดภาพต่อไปนี้ให้เหมือนตัวอย่างมากที่สุด  (2 คะแนน) "
                    value="1.2"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                  <v-row>
                    <v-col cols="12" md="12">
                      <img src="@/assets/tmse5_6.png" />
                    </v-col>
                    <v-col cols="12" md="6">
                      <v-text-field
                        outlined
                        dense
                        label="คลิกช่องเพื่อเลือกรูปภาพ"
                        @click="pickFile"
                        v-model="imageName"
                        prepend-icon="mdi-file-image"
                      ></v-text-field>
                      <input
                        type="file"
                        style="display: none"
                        ref="image"
                        accept="image/jpeg, image/jpg, image/png"
                        @change="onFilePicked"
                      />
                      <img
                        :src="imageUrl"
                        height="600"
                        width="800"
                        v-if="imageUrl"
                      />
                      <!-- <button type="button" @click="uploadFile">Upload file</button> -->
                    </v-col>
                    <v-col cols="12" md="6">
                      <v-btn
                        dark
                        rounded
                        color="#E04DB0"
                        type="button"
                        @click="uploadFile"
                        >อัพโหลดรูป</v-btn
                      >
                    </v-col>
                  </v-row>
                </v-col>
                <v-col>
                  <v-text-field dense rounded outlined v-model="tmse5_6_detail">
                  </v-text-field>
                </v-col>
              </v-row>
              <v-divider class="mt-5 mb-5" />
              <v-row>
                <v-col>
                  <v-checkbox
                    v-model="tmse5_7"
                    label="5.7 ผู้ทดสอบบอกผู้ถูกทดสอบว่า “กล้วยกับส้มเหมือนกันคือเป็นผลไม้ แมวกับหมาเหมือนกันคือ..”"
                    value="1.1"
                    class="mb-2"
                    @change="tmse_check_5"
                  >
                  </v-checkbox>
                </v-col>
                <v-col>
                  <v-text-field dense rounded outlined v-model="tmse5_7_detail">
                  </v-text-field>
                </v-col>
              </v-row>
              <v-divider class="mt-5 mb-5" />
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tmse5 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------6--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                6. Recall (3 คะแนน) ผู้ทดสอบให้ผู้ถูกทดสอบบอกสิ่งของ 3
                อย่างที่ให้จำเมื่อสักครู่ว่ามีอะไรบ้าง
              </h3>

              <v-checkbox
                v-model="tmse6_1"
                label="ต้นไม้"
                value="1.1"
                class="mb-2"
                @change="tmse_check_6"
              >
              </v-checkbox>

              <v-checkbox
                v-model="tmse6_2"
                label="รถยนต์"
                value="1.2"
                class="mb-2"
                @change="tmse_check_6"
              >
              </v-checkbox>

              <v-checkbox
                v-model="tmse6_3"
                label="มือ"
                value="1.3"
                class="mb-2"
                @change="tmse_check_6"
              >
              </v-checkbox>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tmse6 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel text-h4 mb-2">รวมคะแนน</h3>
            </v-col>
            <v-col cols="12" md="2">
              <v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ total | json }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="3"
              ><h3 class="textlabel text-h4 mb-2">ผลการประเมิน</h3>
            </v-col>
            <v-col cols="12" md="6">
              <v-chip class="white--text text-h4" color="#79DAE8">
                {{ result }}
              </v-chip>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_tmse">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div>
            </v-col>
            <v-col cols="12">
              <div class="text-right">ผู้ประเมิน - {{ assessor }}</div>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Tmse',
  data() {
    return {
      tmse1_1: '0',
      tmse1_1_detail: '',
      tmse1_2: '0',
      tmse1_2_detail: '',
      tmse1_3: '0',
      tmse1_3_detail: '',
      tmse1_4: '0',
      tmse1_4_detail: '',
      tmse1_5: '0',
      tmse1_5_detail: '',
      tmse1_6: '0',
      tmse1_6_detail: '',
      tmse2_1: '0',
      tmse2_2: '0',
      tmse2_3: '0',
      tmse3_1: '0',
      tmse3_2: '0',
      tmse3_3: '0',
      tmse3_4: '0',
      tmse3_5: '0',
      tmse4_1: '0',
      tmse4_2: '0',
      tmse4_3: '0',
      tmse5_1: '0',
      tmse5_1_detail: '',
      tmse5_2: '0',
      tmse5_2_detail: '',
      tmse5_3: '0',
      tmse5_3_detail: '',

      tmse5_4_1: '0',
      tmse5_4_2: '0',
      tmse5_4_3: '0',
      tmse5_5: '0',
      tmse5_5_detail: '',
      tmse5_6: '0',
      tmse5_7: '0',
      tmse5_7_detail: '',
      tmse6_1: '0',
      tmse6_2: '0',
      tmse3_3: '0',
      tmse1: '0',
      tmse2: '0',
      tmse3: '0',
      tmse4: '0',
      tmse5: '0',
      tmse6: '0',
      imageUrl: '',
      imageFile: null,
      imageName: '',
      // cid: '3901101272704',
      hn: '',
      cid: '',
      assessor_date: '',
      tmse_selects: '',
      session: '',
      assessor: '',
      assessor_new: '',
    }
  },
  beforeMount() {
    this.session = JSON.parse(localStorage.getItem('token'))
    // alert(this.session[0].fullname)
  },
  mounted() {
    if (this.session) {
      this.assessor_new = this.session[0].fullname
    }
  },
  methods: {
    tmse_check_1() {
      if (!this.tmse1_1) {
        this.tmse1_1 = '0'
      } else if (!this.tmse1_2) {
        this.tmse1_2 = '0'
      } else if (!this.tmse1_3) {
        this.tmse1_3 = '0'
      } else if (!this.tmse1_4) {
        this.tmse1_4 = '0'
      } else if (!this.tmse1_5) {
        this.tmse1_5 = '0'
      } else if (!this.tmse1_6) {
        this.tmse1_6 = '0'
      }
      this.tmse1 =
        parseInt(this.tmse1_1) +
        parseInt(this.tmse1_2) +
        parseInt(this.tmse1_3) +
        parseInt(this.tmse1_4) +
        parseInt(this.tmse1_5) +
        parseInt(this.tmse1_6)
    },
    tmse_check_2() {
      if (!this.tmse2_1) {
        this.tmse2_1 = '0'
      } else if (!this.tmse2_2) {
        this.tmse2_2 = '0'
      } else if (!this.tmse2_3) {
        this.tmse2_3 = '0'
      }
      this.tmse2 =
        parseInt(this.tmse2_1) + parseInt(this.tmse2_2) + parseInt(this.tmse2_3)
    },
    tmse_check_3() {
      if (!this.tmse3_1) {
        this.tmse3_1 = '0'
      } else if (!this.tmse3_2) {
        this.tmse3_2 = '0'
      } else if (!this.tmse3_3) {
        this.tmse3_3 = '0'
      } else if (!this.tmse3_4) {
        this.tmse3_4 = '0'
      } else if (!this.tmse3_5) {
        this.tmse3_5 = '0'
      }
      this.tmse3 =
        parseInt(this.tmse3_1) +
        parseInt(this.tmse3_2) +
        parseInt(this.tmse3_3) +
        parseInt(this.tmse3_4) +
        parseInt(this.tmse3_5)
    },
    tmse_check_4() {
      if (!this.tmse4_1) {
        this.tmse4_1 = '0'
      } else if (!this.tmse4_2) {
        this.tmse4_2 = '0'
      } else if (!this.tmse4_3) {
        this.tmse4_3 = '0'
      }
      this.tmse4 =
        parseInt(this.tmse4_1) + parseInt(this.tmse4_2) + parseInt(this.tmse4_3)
    },
    tmse_check_5() {
      if (!this.tmse5_1) {
        this.tmse5_1 = '0'
      } else if (!this.tmse5_2) {
        this.tmse5_2 = '0'
      } else if (!this.tmse5_3) {
        this.tmse5_3 = '0'
      } else if (!this.tmse5_4_1) {
        this.tmse5_4_1 = '0'
      } else if (!this.tmse5_4_2) {
        this.tmse5_4_2 = '0'
      } else if (!this.tmse5_4_3) {
        this.tmse5_4_3 = '0'
      } else if (!this.tmse5_5) {
        this.tmse5_5 = '0'
      } else if (!this.tmse5_6) {
        this.tmse5_6 = '0'
      } else if (!this.tmse5_7) {
        this.tmse5_7 = '0'
      }
      this.tmse5 =
        parseInt(this.tmse5_1) +
        parseInt(this.tmse5_2) +
        parseInt(this.tmse5_3) +
        parseInt(this.tmse5_4_1) +
        parseInt(this.tmse5_4_2) +
        parseInt(this.tmse5_4_3) +
        parseInt(this.tmse5_5) +
        parseInt(this.tmse5_6) +
        parseInt(this.tmse5_7)
    },
    tmse_check_6() {
      if (!this.tmse6_1) {
        this.tmse6_1 = '0'
      } else if (!this.tmse6_2) {
        this.tmse6_2 = '0'
      } else if (!this.tmse6_3) {
        this.tmse6_3 = '0'
      }
      this.tmse6 =
        parseInt(this.tmse6_1) + parseInt(this.tmse6_2) + parseInt(this.tmse6_3)
    },
    pickFile() {
      this.$refs.image.click()
    },
    onFilePicked(e) {
      const files = e.target.files
      if (files[0] !== undefined) {
        this.imageName = files[0].name
        if (this.imageName.lastIndexOf('.') <= 0) {
          return
        }
        const fr = new FileReader()
        fr.readAsDataURL(files[0])
        fr.addEventListener('load', () => {
          this.imageUrl = fr.result
          this.imageFile = files[0]
        })
      } else {
        this.imageName = ''
        this.imageFile = ''
        this.imageUrl = ''
      }
    },
    uploadFile() {
      if (!this.imageFile) {
        alert('no pic')
      } else {
        let formData = new FormData()
        formData.append('file', this.imageFile)
        formData.append('cid', this.cid)
        axios
          .post(
            `${this.$axios.defaults.baseURL}uploads/upload_tmse.php`,
            formData,
            {
              headers: {
                'Content-Type': 'multipart/form-data',
              },
              cid: this.cid,
            }
          )
          .then(function (response) {
            if (!response.data) {
              alert('File not uploaded.')
            } else {
              alert(response.data)
            }
          })
          .catch(function (error) {
            console.log(error)
          })
      }
    },
    receive_cidhn(value) {
      //alert(value[0].hn)
      this.hn = value[0].hn
      this.cid = value[0].cid
      this.assessor_date = value[0].assessor_date
    },
    save_tmse() {
      if (this.tmse_selects.length > 0) {
        this.tmse_update()
      } else {
        if (!this.hn || !this.cid || !this.assessor_date) {
          this.$swal({
            title: 'แจ้งเตือน',
            text: 'ระบุข้อมูลไม่ครบ',
            icon: 'error',
            confirmButtonText: 'ตกลง',
          })
        } else {
          const { v4: uuidv4 } = require('uuid')
          this.uhid = uuidv4()

          axios
            .post(`${this.$axios.defaults.baseURL}Tmse/tmse_add.php`, {
              uhid: this.uhid,
              tmse1_1: this.tmse1_1,
              tmse1_1_detail: this.tmse1_1_detail,
              tmse1_2: this.tmse1_2,
              tmse1_2_detail: this.tmse1_2_detail,
              tmse1_3: this.tmse1_3,
              tmse1_3_detail: this.tmse1_3_detail,
              tmse1_4: this.tmse1_4,
              tmse1_4_detail: this.tmse1_4_detail,
              tmse1_5: this.tmse1_5,
              tmse1_5_detail: this.tmse1_5_detail,
              tmse1_6: this.tmse1_6,
              tmse1_6_detail: this.tmse1_6_detail,
              tmse2_1: this.tmse2_1,
              tmse2_2: this.tmse2_2,
              tmse2_3: this.tmse2_3,
              tmse3_1: this.tmse3_1,
              tmse3_2: this.tmse3_2,
              tmse3_3: this.tmse3_3,
              tmse3_4: this.tmse3_4,
              tmse3_5: this.tmse3_5,
              tmse4_1: this.tmse4_1,
              tmse4_2: this.tmse4_2,
              tmse4_3: this.tmse4_3,
              tmse5_1: this.tmse5_1,
              tmse5_1_detail: this.tmse5_1_detail,
              tmse5_2: this.tmse5_2,
              tmse5_2_detail: this.tmse5_2_detail,
              tmse5_3: this.tmse5_3,
              tmse5_3_detail: this.tmse5_3_detail,
              tmse5_4_1: this.tmse5_4_1,
              tmse5_4_2: this.tmse5_4_2,
              tmse5_4_3: this.tmse5_4_3,
              tmse5_5: this.tmse5_5,
              tmse5_5_detail: this.tmse5_5_detail,
              tmse5_6: this.tmse5_6,
              tmse5_7: this.tmse5_7,
              tmse5_7_detail: this.tmse5_7_detail,
              tmse6_1: this.tmse6_1,
              tmse6_2: this.tmse6_2,
              tmse6_3: this.tmse6_3,
              hn: this.hn,
              cid: this.cid,
              assessor_date: this.assessor_date,
              total: this.total,
              result: this.result,
              assessor: this.assessor,
            })
            .then((response) => {
              this.message = response.data

              if (this.message[0].message == 'เพิ่มข้อมูลสำเร็จ') {
                this.$swal({
                  title: 'สถานะการเพิ่ม',
                  text: this.message[0].message,
                  icon: 'success',
                  confirmButtonText: 'ตกลง',
                })
              } else {
                this.$swal({
                  title: 'สถานะการเพิ่ม',
                  text: this.message[0].message,
                  icon: 'error',
                  confirmButtonText: 'ตกลง',
                })
              }
            })
        }
      }
    },
    tmse_select(value) {
      axios
        .post(`${this.$axios.defaults.baseURL}Tmse/tmse_select.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          this.tmse_selects = response.data
          this.uhid = this.tmse_selects[0].uhid
          this.tmse1_1 = this.tmse_selects[0].tmse1_1
          this.tmse1_1_detail = this.tmse_selects[0].tmse1_1_detail
          this.tmse1_2 = this.tmse_selects[0].tmse1_2
          this.tmse1_2_detail = this.tmse_selects[0].tmse1_2_detail
          this.tmse1_3 = this.tmse_selects[0].tmse1_3
          this.tmse1_3_detail = this.tmse_selects[0].tmse1_3_detail
          this.tmse1_4 = this.tmse_selects[0].tmse1_4
          this.tmse1_4_detail = this.tmse_selects[0].tmse1_4_detail
          this.tmse1_5 = this.tmse_selects[0].tmse1_5
          this.tmse1_5_detail = this.tmse_selects[0].tmse1_5_detail
          this.tmse1_6 = this.tmse_selects[0].tmse1_6
          this.tmse1_6_detail = this.tmse_selects[0].tmse1_6_detail
          this.tmse2_1 = this.tmse_selects[0].tmse2_1
          this.tmse2_2 = this.tmse_selects[0].tmse2_2
          this.tmse2_3 = this.tmse_selects[0].tmse2_3
          this.tmse3_1 = this.tmse_selects[0].tmse3_1
          this.tmse3_2 = this.tmse_selects[0].tmse3_2
          this.tmse3_3 = this.tmse_selects[0].tmse3_3
          this.tmse3_4 = this.tmse_selects[0].tmse3_4
          this.tmse3_5 = this.tmse_selects[0].tmse3_5
          this.tmse4_1 = this.tmse_selects[0].tmse4_1
          this.tmse4_2 = this.tmse_selects[0].tmse4_2
          this.tmse4_3 = this.tmse_selects[0].tmse4_3
          this.tmse5_1 = this.tmse_selects[0].tmse5_1
          this.tmse5_1_detail = this.tmse_selects[0].tmse5_1_detail
          this.tmse5_2 = this.tmse_selects[0].tmse5_2
          this.tmse5_2_detail = this.tmse_selects[0].tmse5_2_detail
          this.tmse5_3 = this.tmse_selects[0].tmse5_3
          this.tmse5_3_detail = this.tmse_selects[0].tmse5_3_detail
          this.tmse5_4_1 = this.tmse_selects[0].tmse5_4_1
          this.tmse5_4_2 = this.tmse_selects[0].tmse5_4_2
          this.tmse5_4_3 = this.tmse_selects[0].tmse5_4_3
          this.tmse5_5 = this.tmse_selects[0].tmse5_5
          this.tmse5_5_detail = this.tmse_selects[0].tmse5_5_detail
          this.tmse5_6 = this.tmse_selects[0].tmse5_6
          this.tmse5_7 = this.tmse_selects[0].tmse5_7
          this.tmse5_7_detail = this.tmse_selects[0].tmse5_7_detail
          this.tmse6_1 = this.tmse_selects[0].tmse6_1
          this.tmse6_2 = this.tmse_selects[0].tmse6_2
          this.tmse6_3 = this.tmse_selects[0].tmse6_3
          this.hn = this.tmse_selects[0].hn
          this.cid = this.tmse_selects[0].cid
          this.assessor_date = this.tmse_selects[0].assessor_date
          this.total = this.tmse_selects[0].total
          this.result = this.tmse_selects[0].result
          this.assessor = this.tmse_selects[0].assessor
        })
    },
    tmse_update: function () {
      if (!this.uhid) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ไม่พบข้อมูลupdate',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        axios
          .put(`${this.$axios.defaults.baseURL}Tmse/tmse_update.php`, {
            uhid: this.uhid,
            tmse1_1: this.tmse1_1,
            tmse1_1_detail: this.tmse1_1_detail,
            tmse1_2: this.tmse1_2,
            tmse1_2_detail: this.tmse1_2_detail,
            tmse1_3: this.tmse1_3,
            tmse1_3_detail: this.tmse1_3_detail,
            tmse1_4: this.tmse1_4,
            tmse1_4_detail: this.tmse1_4_detail,
            tmse1_5: this.tmse1_5,
            tmse1_5_detail: this.tmse1_5_detail,
            tmse1_6: this.tmse1_6,
            tmse1_6_detail: this.tmse1_6_detail,
            tmse2_1: this.tmse2_1,
            tmse2_2: this.tmse2_2,
            tmse2_3: this.tmse2_3,
            tmse3_1: this.tmse3_1,
            tmse3_2: this.tmse3_2,
            tmse3_3: this.tmse3_3,
            tmse3_4: this.tmse3_4,
            tmse3_5: this.tmse3_5,
            tmse4_1: this.tmse4_1,
            tmse4_2: this.tmse4_2,
            tmse4_3: this.tmse4_3,
            tmse5_1: this.tmse5_1,
            tmse5_1_detail: this.tmse5_1_detail,
            tmse5_2: this.tmse5_2,
            tmse5_2_detail: this.tmse5_2_detail,
            tmse5_3: this.tmse5_3,
            tmse5_3_detail: this.tmse5_3_detail,
            tmse5_4_1: this.tmse5_4_1,
            tmse5_4_2: this.tmse5_4_2,
            tmse5_4_3: this.tmse5_4_3,
            tmse5_5: this.tmse5_5,
            tmse5_5_detail: this.tmse5_5_detail,
            tmse5_6: this.tmse5_6,
            tmse5_7: this.tmse5_7,
            tmse5_7_detail: this.tmse5_7_detail,
            tmse6_1: this.tmse6_1,
            tmse6_2: this.tmse6_2,
            tmse6_3: this.tmse6_3,
            hn: this.hn,
            cid: this.cid,
            assessor_date: this.assessor_date,
            total: this.total,
            result: this.result,
            assessor: this.assessor_new,
          })
          .then((response) => {
            this.message = response.data
            if (this.message[0].message === 'แก้ไขข้อมูลสำเร็จ') {
              this.$swal({
                title: 'สถานะการแก้ไข',
                text: this.message[0].message,
                icon: 'success',
                confirmButtonText: 'ตกลง',
              })
            } else {
              this.$swal({
                title: 'สถานะการแก้ไข',
                text: this.message[0].Message,
                icon: 'error',
                confirmButtonText: 'ตกลง',
              })
            }
          })
      }
    },
    clear_form() {
      this.uhid = ''
      this.tmse1_1 = '0'
      this.tmse1_1_detail = ''
      this.tmse1_2 = '0'
      this.tmse1_2_detail = ''
      this.tmse1_3 = '0'
      this.tmse1_3_detail = ''
      this.tmse1_4 = '0'
      this.tmse1_4_detail = ''
      this.tmse1_5 = '0'
      this.tmse1_5_detail = ''
      this.tmse1_6 = '0'
      this.tmse1_6_detail = ''
      this.tmse2_1 = '0'
      this.tmse2_2 = '0'
      this.tmse2_3 = '0'
      this.tmse3_1 = '0'
      this.tmse3_2 = '0'
      this.tmse3_3 = '0'
      this.tmse3_4 = '0'
      this.tmse3_5 = '0'
      this.tmse4_1 = '0'
      this.tmse4_2 = '0'
      this.tmse4_3 = '0'
      this.tmse5_1 = '0'
      this.tmse5_1_detail = ''
      this.tmse5_2 = '0'
      this.tmse5_2_detail = ''
      this.tmse5_3 = '0'
      this.tmse5_3_detail = ''
      this.tmse5_4_1 = '0'
      this.tmse5_4_2 = '0'
      this.tmse5_4_3 = '0'
      this.tmse5_5 = '0'
      this.tmse5_5_detail = ''
      this.tmse5_6 = '0'
      this.tmse5_7 = '0'
      this.tmse5_7_detail = ''
      this.tmse6_1 = '0'
      this.tmse6_2 = '0'
      this.tmse6_3 = '0'
      this.hn = ''
      this.cid = ''
      this.assessor_date = ''
      this.total = ''
      this.result = ''
    },
  },
  computed: {
    total: function () {
      if (this.tmse1)
        return (
          parseInt(this.tmse1) +
          parseInt(this.tmse2) +
          parseInt(this.tmse3) +
          parseInt(this.tmse4) +
          parseInt(this.tmse5) +
          parseInt(this.tmse6)
        )
      else if (this.tmse2)
        return (
          parseInt(this.tmse1) +
          parseInt(this.tmse2) +
          parseInt(this.tmse3) +
          parseInt(this.tmse4) +
          parseInt(this.tmse5) +
          parseInt(this.tmse6)
        )
      else if (this.tmse3)
        return (
          parseInt(this.tmse1) +
          parseInt(this.tmse2) +
          parseInt(this.tmse3) +
          parseInt(this.tmse4) +
          parseInt(this.tmse5) +
          parseInt(this.tmse6)
        )
      else if (this.tmse4)
        return (
          parseInt(this.tmse1) +
          parseInt(this.tmse2) +
          parseInt(this.tmse3) +
          parseInt(this.tmse4) +
          parseInt(this.tmse5) +
          parseInt(this.tmse6)
        )
      else if (this.tmse5)
        return (
          parseInt(this.tmse1) +
          parseInt(this.tmse2) +
          parseInt(this.tmse3) +
          parseInt(this.tmse4) +
          parseInt(this.tmse5) +
          parseInt(this.tmse6)
        )
      else if (this.tmse6)
        return (
          parseInt(this.tmse1) +
          parseInt(this.tmse2) +
          parseInt(this.tmse3) +
          parseInt(this.tmse4) +
          parseInt(this.tmse5) +
          parseInt(this.tmse6)
        )
    },
    result: function () {
      if (this.total >= 1 && this.total < 24)
        return 'มีภาวะผิดปกติทางด้านความสามารถของสมองโดยเฉพาะความจำ (Cognitive impairment )'
      else if (this.total > 24) return 'ปกติ'
      else if (this.total == 0) return '-'
    },
  },
}
</script>

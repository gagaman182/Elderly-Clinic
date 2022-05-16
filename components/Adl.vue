<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            แบบประเมินผู้สูงอายุตามกลุ่มศักยภาพ
            ตามความสามารถในการประกอบกิจวัตรประจำวัน (Barthel Activities of Daily
            Living: ADL)
          </v-card-title>
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            - ติดสังคม 12 คะแนน ขึ้นไป<br />
            - ติดบ้าน 5-11 คะแนน<br />
            - ติดเตียง 0-4 คะแนน<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- ----1----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                1. Feeding
                (รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า)
              </h3>
              <v-radio-group v-model="adl1">
                <v-radio
                  label="ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนป้อนให้"
                  value="0"
                ></v-radio>
                <v-radio
                  label="ตักอาหารเองได้ แต่ต้องมีคนช่วย เช่น ช่วยใช้ช้อนตักเตรียมไว้ให้หรือตัดเป็นเล็ก ๆ ไว้ล่วงหน้า"
                  value="1"
                ></v-radio>
                <v-radio
                  label="ตักอาหารและช่วยตัวเองได้เป็นปกติ"
                  value="2"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl1 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----2----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                2. Grooming (ล้างหน้า หวีผม แปรงฟัน โกนหนวด ในระยะเวลา ๒๔-๒๘
                ชั่วโมงที่ผ่านมา)
              </h3>
              <v-radio-group v-model="adl2">
                <v-radio label="ต้องการความช่วยเหลือ" value="0"></v-radio>
                <v-radio
                  label="ทำเองได้ (รวมทั้งที่ทำได้เองถ้าเตรียมอุปกรณ์ไว้ให้)"
                  value="1"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----3----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                3. Transfer (ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้)
              </h3>
              <v-radio-group v-model="adl3">
                <v-radio
                  label="ไม่สามารถนั่งได้ (นั่งแล้วจะล้มเสมอ) หรือต้องใช้คนสองคนช่วยกันยกขึ้น"
                  value="0"
                ></v-radio>
                <v-radio
                  label="ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้ เช่น ต้องใช้คนที่แข็งแรงหรือมีทักษะ 1 คน หรือ ใช้คนทั่วไป 2 คนพยุงหรือดันขึ้นมาจึงจะนั่งอยู่ได้"
                  value="1"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----4----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">4. Toilet use (ใช้ห้องน้ำ)</h3>
              <v-radio-group v-model="adl4">
                <v-radio label="ช่วยตัวเองไม่ได้" value="0"></v-radio>
                <v-radio
                  label="ทำเองได้บ้าง (อย่างน้อยทำความสะอาดตัวเองได้ หลังจากเสร็จธุระ) แต่ต้องการความช่วยเหลือ ในบางสิ่ง"
                  value="1"
                ></v-radio>
                <v-radio
                  label="ช่วยตัวเองได้ดี (ขึ้นนั่งและลงจากโถส้วมเองได้ ทำความสะอาดได้เรียบร้อยหลังจากเสร็จธุระ ถอดใส่เสื้อผ้าได้เรียบร้อย)"
                  value="2"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl4 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----5----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                5. Mobility (การเคลื่อนที่ภายในห้องหรือบ้าน)
              </h3>
              <v-radio-group v-model="adl5">
                <v-radio label="เคลื่อนที่ไปไหนไม่ได้" value="0"></v-radio>
                <v-radio
                  label="ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง (ไม่ต้องมีคนเข็นให้) และจะต้องเข้าออกมุมห้อง หรือประตูได้"
                  value="1"
                ></v-radio>
                <v-radio
                  label="เดินหรือเคลื่อนที่โดยมีคนช่วย เช่น พยุง หรือบอกให้ทำตาม หรือต้องให้ความสนใจดูแลเพื่อความปลอดภัย"
                  value="2"
                ></v-radio>
                <v-radio label="เดินหรือเคลื่อนที่ได้เอง" value="3"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl5 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----6----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">6. Dressing (การสวมใส่เสื้อผ้า)</h3>
              <v-radio-group v-model="adl6">
                <v-radio
                  label="ต้องมีคนสวมใส่ให้ ช่วยตัวเองแทบไม่ได้หรือได้น้อย"
                  value="0"
                ></v-radio>
                <v-radio
                  label="ช่วยตัวเองได้ประมาณร้อยละ 50 ที่เหลือต้องมีคนช่วย"
                  value="1"
                ></v-radio>
                <v-radio
                  label="ช่วยตัวเองได้ดี (รวมทั้งการติดกระดุม รูดซิป หรือใช้เสื้อผ้าที่ดัดแปลงให้เหมาะสมก็ได้)"
                  value="2"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl6 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----7----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">7. Stairs (การขึ้นลงบันได 1 ชั้น)</h3>
              <v-radio-group v-model="adl7">
                <v-radio label="ไม่สามารถทำได้" value="0"></v-radio>
                <v-radio label="ต้องการคนช่วย" value="1"></v-radio>
                <v-radio
                  label="ขึ้นลงได้เอง (ถ้าต้องใช้เครื่องช่วยเดิน เช่น walker จะต้องเอาขึ้นลงได้ด้วย) "
                  value="2"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl7 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----8----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">8. Bathing (การอาบน้ำ)</h3>
              <v-radio-group v-model="adl8">
                <v-radio label="ต้องมีคนช่วยหรือทำให้" value="0"></v-radio>
                <v-radio label="อาบน้ำเองได้" value="1"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl8 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----9----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                9. Bowels (การกลั้นการถ่ายอุจจาระในระยะ 1 สัปดาห์ที่ผ่านมา)
              </h3>
              <v-radio-group v-model="adl9">
                <v-radio
                  label="กลั้นไม่ได้ หรือต้องการการสวนอุจจาระอยู่เสมอ"
                  value="0"
                ></v-radio>
                <v-radio
                  label="กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่า 1 ครั้งต่อสัปดาห์)"
                  value="1"
                ></v-radio>
                <v-radio label="กลั้นได้เป็นปกติ" value="2"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl9 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----10----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                10. Bladder (การกลั้นปัสสาวะในระยะ 1 สัปดาห์ที่ผ่านมา)
              </h3>
              <v-radio-group v-model="adl10">
                <v-radio
                  label="กลั้นไม่ได้ หรือใส่สายสวนปัสสาวะแต่ไม่สามารถดูแลเองได้"
                  value="0"
                ></v-radio>
                <v-radio
                  label="กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่าวันละ 1 ครั้ง)"
                  value="1"
                ></v-radio>
                <v-radio label="กลั้นได้เป็นปกติ" value="2"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ adl10 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="12">
              <v-divider></v-divider>
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
            <v-col cols="12" md="3">
              <v-chip class="white--text text-h4" color="#79DAE8">
                {{ result }}
              </v-chip>
            </v-col>
          </v-row>

          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_adl">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div></v-col
            ></v-row
          >
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'Adl',
  data() {
    return {
      adl1: '',
      adl2: '',
      adl3: '',
      adl4: '',
      adl5: '',
      adl6: '',
      adl7: '',
      adl8: '',
      adl9: '',
      adl10: '',
    }
  },
  mounted() {},
  methods: {
    save_adl() {
      alert(this.total)
    },
  },
  computed: {
    total: function () {
      if (
        !this.adl1 ||
        !this.adl2 ||
        !this.adl3 ||
        !this.adl4 ||
        !this.adl5 ||
        !this.adl6 ||
        !this.adl7 ||
        !this.adl8 ||
        !this.adl9 ||
        !this.adl10
      )
        return 0
      return (
        parseInt(this.adl1) +
        parseInt(this.adl2) +
        parseInt(this.adl3) +
        parseInt(this.adl4) +
        parseInt(this.adl5) +
        parseInt(this.adl6) +
        parseInt(this.adl7) +
        parseInt(this.adl8) +
        parseInt(this.adl9) +
        parseInt(this.adl10)
      )
    },
    result: function () {
      if (this.total >= 1 && this.total <= 4) return 'ติดเตียง'
      else if (this.total >= 5 && this.total <= 11) return 'ติดบ้าน'
      else if (this.total >= 12) return 'ติดสังคม'
      else if (this.total == 0) return '-'
    },
  },
  //   watch: {
  //   result: function () {
  //     this.fullName = this.total
  //   },
  // },
}
</script>

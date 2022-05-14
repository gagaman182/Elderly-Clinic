<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            แบบประเมินระดับความรุนแรงของโรคข้อเข่าเสื่อม ( Oxford Knee Score )
          </v-card-title>
          <v-card-subtitle>
            โปรดใส่เครื่องหมาย √
            หัวข้อที่ตรงกับอาการที่เกิดขึ้นกับตัวท่านมากที่สุด ในช่วง เวลา 1
            เดือน ที่ผ่านมา
          </v-card-subtitle>
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            0 - 19 ระดับรุนแรง<br />
            20 - 29 ระดับปานนกลาง<br />
            30 - 39 ระดับเริ่มมีอาการ<br />
            40 - 48 ไม่พบอาการผิดปกติ<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- ----1----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">1. ลักษณะอาการเจ็บปวดเข่าของท่าน</h3>
              <v-radio-group v-model="knee_score1">
                <v-radio label="ไม่มีอาการ" value="4"></v-radio>
                <v-radio
                  label="อาการปวดลึกๆที่เข่าเล็กน้อยเฉพาะเวลาขยับตัวหรืออยู่ในบางท่าเท่านั้น"
                  value="3"
                ></v-radio>
                <v-radio
                  label="หลังใช้งานนาน อาการปวดเข่ามากขึ้น พักแล้วดีขึ้น เป็นๆหายๆ"
                  value="2"
                ></v-radio>
                <v-radio
                  label="อาการปวดเข่าเพิ่มมากขึ้น ปวดนานขึ้น"
                  value="1"
                ></v-radio>
                <v-radio label="อยู่เฉยๆก็ปวดมากขยับไม่ได้" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score1 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----2----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                2. ท่านมีปัญหาเรื่องเข่าในการทำกิจวัตรประจำวันด้วยตนเอง หรือไม่
                เช่น การยืน อาบน้ำ เป็นต้น
              </h3>
              <v-radio-group v-model="knee_score2">
                <v-radio label="ไม่มีปัญหา" value="4"></v-radio>
                <v-radio
                  label="มีอาการปวดเข่า/ข้อเข่าฝืดตึงขัดเล็กน้อยแต่น้อยมาก"
                  value="3"
                ></v-radio>
                <v-radio
                  label="มีอาการปวดเข่า/ข้อเข่าฝืดตึงเล็กน้อย บ่อยครั้ง"
                  value="2"
                ></v-radio>
                <v-radio
                  label="เริ่มมีปัญหาทำด้วยความยากลำบาก"
                  value="1"
                ></v-radio>
                <v-radio label="ไม่สามารถทำได้" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----3----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                3. ท่านมีปัญหาเรื่องเข่า เมื่อก้าวขึ้นลงรถ หรือรถประจำทางหรือไม่
              </h3>
              <v-radio-group v-model="knee_score3">
                <v-radio label="ไม่มีอาการใดๆ" value="4"> </v-radio>
                <v-radio
                  label="มีอาการปวดเข่า/ข้อเข่าฝืดตึงขัดเล็กน้อยแต่น้อยมาก"
                  value="3"
                ></v-radio>
                <v-radio
                  label="มีอาการปวดเข่า/ข้อเข่าฝืดก้าวขึ้นลงได้ช้ากว่าปกติ"
                  value="2"
                ></v-radio>
                <v-radio
                  label="มีอาการปวดเข่ามาก/ข้อเข่าฝืดก้าวขึ้นลงด้วยความยากลำบาก"
                  value="1"
                ></v-radio>
                <v-radio label="ไม่สามารถทำได้" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----4----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                4.
                ระยะเวลานานเท่าไรที่ท่านเดินได้มากที่สุดก่อนที่ท่านจะมีอาการปวดเข่า
              </h3>
              <v-radio-group v-model="knee_score4">
                <v-radio
                  label="เดินได้เกิน 1 ชั่วโมงโดยไม่มีอาการอะไร"
                  value="4"
                >
                </v-radio>
                <v-radio label="เดินได้ 6 – 60 นาทีเริ่มมีอาการปวด" value="3">
                </v-radio>
                <v-radio
                  label="เดินได้เพียง 5 – 15 นาทีเริ่มมีอาการปวด"
                  value="2"
                >
                </v-radio>
                <v-radio
                  label="เดินได้แค่รอบบ้านเท่านั้น เริ่มมีอาการปวด"
                  value="1"
                >
                </v-radio>
                <v-radio label="ทำไม่ได้และเดินไม่ไหว" value="0"> </v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score4 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----5----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                5. หลังทานอาหารเสร็จ
                ในขณะที่ลุกจากเก้าอี้นั่งเข่าของท่านมีอาการอย่างไร
              </h3>
              <v-radio-group v-model="knee_score5">
                <v-radio label="ไม่มีอาการ" value="4"></v-radio>
                <v-radio
                  label="มีอาการปวดเข่า/ข้อเข่าฝืดเล็กน้อย"
                  value="3"
                ></v-radio>
                <v-radio
                  label="มีอาการปวดเข่าข้อเข่าฝืดปานกลาง"
                  value="2"
                ></v-radio>
                <v-radio
                  label="มีอาการปวดเข่ามาก/ข้อเข่าฝืด ลุกขึ้นยืนได้ด้วยความยากลำบาก"
                  value="1"
                ></v-radio>
                <v-radio label="ปวดมากไม่สามารถลุกขึ้นได้" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score5 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----6----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                6. ท่านต้องเดินโยกตัว (
                เดินกระโผลกกระเผลก)เพราะอาการที่เกิดจากเข่าของท่านหรือไม่
              </h3>
              <v-radio-group v-model="knee_score6">
                <v-radio label="ไม่เคย" value="4"></v-radio>
                <v-radio
                  label="ในช่วง 2-3 ก้าวแรกที่ออกเดินเท่านั้น"
                  value="3"
                ></v-radio>
                <v-radio label="เป็นบางครั้ง" value="2"></v-radio>
                <v-radio label="เป็นส่วนใหญ่" value="1"></v-radio>
                <v-radio label="ตลอดเวลา" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score6 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----7----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                7. ท่านสามารถนั่งลงคุกเข่าและลุกขึ้นได้หรือไม่
              </h3>
              <v-radio-group v-model="knee_score7">
                <v-radio label="ลุกได้ง่าย" value="4"></v-radio>
                <v-radio label="ลุกได้ ลำบากเล็กน้อย" value="3"></v-radio>
                <v-radio label="ลุกได้แต่ยากขึ้น" value="2"></v-radio>
                <v-radio label="ลุกได้แต่ยากลำบากมาก" value="1"></v-radio>
                <v-radio label="ลุกไม่ไหว" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score7 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----8----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                8. ท่านมีปัญหาปวดเข่า ในขณะที่นอนกลางคืนหรือไม่
              </h3>
              <v-radio-group v-model="knee_score8">
                <v-radio label="ไม่เคย" value="4"></v-radio>
                <v-radio label="ใน 1 เดือนมี 1-2 ครั้ง" value="3"></v-radio>
                <v-radio label="บางคืน" value="2"></v-radio>
                <v-radio label="ส่วนมาก" value="1"></v-radio>
                <v-radio label="ทุกคืน" value="0"></v-radio>
              </v-radio-group>
            </v-col>
          </v-row>
          <!-- ----9----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                9. ในขณะที่คุณทำงาน/ทำงานบ้านท่านมีอาการปวดเข่าหรือไม่
              </h3>
              <v-radio-group v-model="knee_score9">
                <v-radio label="ไม่มี" value="4"></v-radio>
                <v-radio label="น้อยมาก" value="3"></v-radio>
                <v-radio label="บางครั้ง" value="2"></v-radio>
                <v-radio label="ส่วนมาก" value="1"></v-radio>
                <v-radio label="ตลอดเวลา" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score9 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----10----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                10.
                ท่านเคยมีความรู้สึกว่าเข่าของท่านทรุดลงทันทีหรือหมดแรงทันทีจนตัวทรุดลง
              </h3>
              <v-radio-group v-model="knee_score10">
                <v-radio label="ไม่เคย" value="4"></v-radio>
                <v-radio
                  label="ในช่วงแรกที่ก้าวเดินเท่านั้น"
                  value="3"
                ></v-radio>
                <v-radio label="บางครั้ง" value="2"></v-radio>
                <v-radio label="ส่วนมาก" value="1"></v-radio>
                <v-radio label=" ตลอดเวลา" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score10 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----11----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                11. ท่านสามารถไปซื้อของใช้ต่างๆได้ด้วยตัวท่านเอง
              </h3>
              <v-radio-group v-model="knee_score11">
                <v-radio label="ได้เป็นปกติ" value="4"></v-radio>
                <v-radio
                  label="ไปได้เริ่มมีอาการปวดเข่า/ตึงเข่าเล็กน้อย"
                  value="3"
                ></v-radio>
                <v-radio
                  label="ไปได้เริ่มมีอาการปวดเข่า /ตึงเข่ามากขึ้น"
                  value="2"
                ></v-radio>
                <v-radio
                  label="พอไปได้แต่ด้วยความยากลำบากมาก"
                  value="1"
                ></v-radio>
                <v-radio label="ไปไม่ไหว" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score11 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----12----- -->
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel mb-2">
                12. ท่านสามารถเดินลงบันไดได้หรือไม่
              </h3>
              <v-radio-group v-model="knee_score12">
                <v-radio label="เดินลงได้ เป็นปกติ" value="4"></v-radio>
                <v-radio
                  label="เดินลงได้เริ่มมีอาการปวดเข่า/ตึงเข่าเล็กน้อย"
                  value="3"
                ></v-radio>
                <v-radio
                  label="เดินลงได้เริ่มมีอาการปวดเข่า/ตึงเข่ามากขึ้น"
                  value="2"
                ></v-radio>
                <v-radio
                  label="เดินลงได้ด้วยความยากลำบากมาก"
                  value="1"
                ></v-radio>
                <v-radio label="เดินลงไม่ได้" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ knee_score12 }}</span>
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
                <v-btn rounded color="#6A67CE" x-large dark @click="save_regis">
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
  name: 'Knee-Score',
  data() {
    return {
      knee_score1: '',
      knee_score2: '',
      knee_score3: '',
      knee_score4: '',
      knee_score5: '',
      knee_score6: '',
      knee_score7: '',
      knee_score8: '',
      knee_score9: '',
      knee_score10: '',
      knee_score11: '',
      knee_score12: '',
    }
  },
  mounted() {},
  methods: {
    save_regis() {
      alert(this.total)
    },
  },
  computed: {
    total: function () {
      if (
        !this.knee_score1 ||
        !this.knee_score2 ||
        !this.knee_score3 ||
        !this.knee_score4 ||
        !this.knee_score5 ||
        !this.knee_score6 ||
        !this.knee_score7 ||
        !this.knee_score8 ||
        !this.knee_score9 ||
        !this.knee_score10 ||
        !this.knee_score11 ||
        !this.knee_score12
      )
        return 0
      return (
        parseInt(this.knee_score1) +
        parseInt(this.knee_score2) +
        parseInt(this.knee_score3) +
        parseInt(this.knee_score4) +
        parseInt(this.knee_score5) +
        parseInt(this.knee_score6) +
        parseInt(this.knee_score7) +
        parseInt(this.knee_score8) +
        parseInt(this.knee_score9) +
        parseInt(this.knee_score10) +
        parseInt(this.knee_score11) +
        parseInt(this.knee_score12)
      )
    },
    result: function () {
      if (this.total <= 19) return 'ระดับรุนแรง'
      else if (this.total >= 20 && this.total <= 29) return 'ระดับปานนกลาง'
      else if (this.total >= 30 && this.total <= 39) return 'ระดับเริ่มมีอาการ'
      else if (this.total >= 40 && this.total <= 48) return 'ไม่พบอาการผิดปกติ'
    },
  },
  //   watch: {
  //   result: function () {
  //     this.fullName = this.total
  //   },
  // },
}
</script>
